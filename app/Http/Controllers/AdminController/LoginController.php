<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginAdmin(LoginRequest $request)
    {
        
        // $request->authenticate();

        // $request->session()->regenerate();
        $input = $request->all();
        
        // return redirect()->intended(RouteServiceProvider::HOME);
        if(auth('admin')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
           
            if (auth('admin')->user()->isAdmin == 1) {
                return redirect()->route('admin');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

    public function destroy_Admin(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
