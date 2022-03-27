<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('admin');
    }
    public function getClientPage(){
        return view('layouts.clients');
    }
    public function getServicePage(){
        return view('layouts.services');
    }
    public function getDocteursPage(){
        return view('layouts.docteurs');
    }
    public function getAppoinmentPage(){
        return view('layouts.appoinment');
    }
    
}
