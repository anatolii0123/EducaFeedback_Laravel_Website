<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\model\User;
use Session;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        // if(auth()->user()->active == 0) {
        //     // {
        //     //     $_SESSION['error'] = "active";
        //     //     Auth::logout();
        //     //     // return redirect('login');
        //     // }
        // }
        // else {

            $user = User::find(auth()->user()->id);
            $user->last_login = date('Y-m-d');
            $user->save();

            Session::flash('alert', 'Login Success!');

            return '/';
        // }
    }
}
