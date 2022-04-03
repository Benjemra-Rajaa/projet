<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listAdmin(Admin $admin) { // 
        $admin = Admin::all();
       return view('layouts.admins')->with('admins',$admin);
    }
    
}
