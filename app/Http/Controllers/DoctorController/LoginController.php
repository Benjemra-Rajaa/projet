<?php

namespace App\Http\Controllers\DoctorController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginDoctor(LoginRequest $request)
    {
       
        // $request->authenticate();

        // $request->session()->regenerate();
        $input = $request->all();
        
        // return redirect()->intended(RouteServiceProvider::HOME);
        if(auth('doctor')->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            
            if (auth('doctor')->user()->isAdmin == 2) {
               
                $user = Auth::user();
    
                return redirect()->route('doctor',auth('doctor')->user()->id);
            }
            else{
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
