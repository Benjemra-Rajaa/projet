<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function listAdmin() { // 
        $admin = Admin::all();
       return view('admin.Listadmins')->with('admins',$admin);
    }
    
}
