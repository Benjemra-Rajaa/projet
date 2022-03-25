<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class UserController extends Controller
{
    //


    public function listUser(User $user) { // 
        $user = User::all();
      
      
       return view('layouts.clients')->with('clients',$user);
    }
}
