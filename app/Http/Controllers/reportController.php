<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;
class reportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('report.index');
    }
    public function viewb()
    {
        $User = Orders::where('status','Booked')->get();
        return view('management.viewbooking')->with('User',$User);
        //return view('management\viewfeedback');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        
        
            $req->validate([ 
                'dateStart' => 'required',
                'dateEnd' => 'required'
            ]);
    
            $dateStart = date("Y-m-d H:i:s", strtotime($req->dateStart.' 00:00:00'));
            $dateEnd = date("Y-m-d H:i:s", strtotime($req->dateEnd.' 23:59:59'));
    
    
            $sales = Orders::whereBetween('updated_at',[$dateStart, $dateEnd])
                    ->where('payment_status','Paid');

            $amt = Orders::whereBetween('updated_at',[$dateStart, $dateEnd])
                    ->select(DB::raw('sum(amount) as tot')) 
                    ->where('payment_status','Paid');
                  
            dd($amt);
            return view('report.showReport')
            ->with('dateStart',date("m/d/y H:i:s", strtotime($req->dateStart.' 00:00:00')))
            ->with('dateEnd',date("m/d/y H:i:s", strtotime($req->dateEnd.' 23:59:59')))
            ->with('totalPrice', $amt)
            ->with('sales',$sales->paginate(5));
        
    
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
}







