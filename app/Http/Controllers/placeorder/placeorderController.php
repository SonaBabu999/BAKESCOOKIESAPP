<?php

namespace App\Http\Controllers\placeorder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\categoryModel;
use App\menuModel;
use App\Models\cartModel;
use App\Models\Orders;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class placeorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categoryModel::all();
     //dd(session()->all());
        return view('placeorder.index')->with('categories',$categories);
    }

    public function menu($id)
    {
        $menu = menuModel::where('cat_id','=',$id)->get();

        return view('placeorder.viewmenu')->with('menu',$menu);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
        {
          $cart= new cartModel;
          $cart->user_id=$req->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');    //retrieving the id of the user logged in
          $cart->menu_id=$req->ItemID;
          $cart->save();
         return redirect('/placeorder');
        }
       else
       {
           return redirect('/login');
       }
    }
    static function cartItem()
    {
        $userID=session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        return cartModel::where('user_id',$userID)->count();
    }
    function cartList()
    {
        $userID=session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $menuitm= DB::table('cart_models')
        ->join('menu_models','cart_models.menu_id','=','menu_models.id')
        ->where('cart_models.user_id',$userID)
        ->select('menu_models.*','cart_models.id as cartid')
        ->get();
    
        return view('placeorder.cartlist',['menuitm'=>$menuitm]);
    }
    function removeCart($id)
    {
        cartModel::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow()
    {
        $userID=session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $total= DB::table('cart_models')
        ->join('menu_models','cart_models.menu_id','=','menu_models.id')
        ->where('cart_models.user_id',$userID)
        ->select('menu_models.*','cart_models.id as cartid')
        ->sum('menu_models.price');
    
        return view('placeorder.ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userID=session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
       $allcart= cartModel::where('user_id',$userID)->get();
        foreach($allcart as $cart)
        {
            $amt =DB::table('menu_models')
        ->select('name','price')
        ->where('id','=',$cart['menu_id'])
        ->first();
            $order= new Orders;
            $order->Item=$amt->name;
            $order->UserID=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->amount=$amt->price;
            $order->save();
            cartModel::where('user_id',$userID)->delete();
        }
        $req->input();
        return redirect('/payment');
    }

    public function custpay()
    {
        
        $logid=session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        $amt =DB::table('orders')
        ->where('orders.UserID','=',"$logid")
        ->where('status','pending')
        ->sum('orders.amount');
       
     //  dd($amt);

        return view('placeorder.Payment')->with('amt',$amt);
    }
    public function cpayportal()
    {
        $logid=session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $updt = DB::table('orders')
            ->where('orders.UserID','=',"$logid")
            ->update(['orders.status' => "Booked",'orders.payment_status' => "Paid"]);

        return redirect('/paysuccess');
    }

    public function psuccess()
    {
        return view('placeorder.PaySuccess');
    }

public function storeadm(Request $request)
{
    $getemail=request('lemail');
    $getpass=request('lpass');
    echo $getemail;
    echo $getpass;

    $log=new User();
    $log->name="Admin";
    $log->email=$getemail;
    $log->password=Hash::make($getpass);
    //$log->utype="Admin";
    $log->save();
}
public function createadm()
{
    return view('adminsignup');
}



}
