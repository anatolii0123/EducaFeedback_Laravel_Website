<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\model\User;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $users = (new User)->get();
        foreach($users as $user) {
            if($user->username == $request->username) {
                Session::flash('doesntmatch','The user has already exist.');
                return redirect()->back();
            }
        }
        if ($request->password != $request->cpassword) {
            Session::flash('doesntmatch',"Password doesn't match");
            return redirect()->back();
        }
        return $next($request);
    }
}
