<?php

namespace App\Http\Controllers\DoctorController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function show_doctor(){
        return view('doctor.doctor');
    }
}
