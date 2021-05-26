<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function check(Request $request)
    {

        $admin="Admin";
        $cust="Customer";
       

        $userInfo =User::where('email','=',$request->email)->first(); 
        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(strcmp($request->password,$userInfo->password)==0)
            {
                $request-> session()->put('loggeduser', $userInfo->id);
            //     if (strcmp($admin, $userInfo->utype)==0) {
            //         return redirect('/AdminHome');
            //     }     
            //     else if (strcmp($staff, $userInfo->utype)==0) {
            //         return redirect('/StaffHome');
            //     }     
            //     else if (strcmp($stud, $userInfo->utype)==0) {
            //         return redirect('/StudentHome');
            //     }     
             }
            else
            {
                return back()->with('fail','Error: Invalid Login');
            }
        }
    }

}
