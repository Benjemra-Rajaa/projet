<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
class RegisterAdminController extends Controller
{
     

    public function login(){
     return view('Admin.login');
    }

    public function register(){
        return view('Admin.register');
    }

    public function storeAdmin(Request $request){
    
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $user = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'isAdmin'=>1,
                'password' => Hash::make($request->password),
                
            ]);
    
            event(new Registered($user));

            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        

    }
}
