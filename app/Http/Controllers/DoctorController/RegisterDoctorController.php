<?php

namespace App\Http\Controllers\DoctorController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;



class RegisterDoctorController extends Controller
{


    public function login(){
        return view('Doctor.login');
    }

    public function register(){
        return view('doctor.register');
    }

    public function storeDoctor(Request $request){
    
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:docteurs'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'isAdmin'=>2,
            'password' => Hash::make($request->password),
            
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::CLIENTS);
    

}

}
