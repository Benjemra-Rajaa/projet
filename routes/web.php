<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
   // return view('admin');
//})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php'; 


// Admin register 
Route::group(['prefix'=>'Admin'], function(){
    Route::get('/login', 'AdminController\RegisterAdminController@login')->name('admin.login');
    Route::get('/register','AdminController\RegisterAdminController@register')->name('admin.register');
    Route::post('/register/admin','AdminController\RegisterAdminController@storeAdmin')->name('admin.store');
    Route::post('/login','AdminController\LoginController@loginAdmin')->name('admin/login');
    Route::post('/logout','AdminController\LoginController@destroy_Admin')->name('admin.logout');
    // Route::get('connect', 'AccountController@connect')->name('connect');

});

//doctor register 
Route::group(['prefix'=>'Doctor'],function(){
Route::get('/login', 'DoctorController\RegisterDoctorController@login')->name('admin.login');
Route::get('/register','DoctorController\RegisterDoctorController@register')->name('doctor.register');
Route::post('/register/doctor','DoctorController\RegisterDoctorController@storeDoctor')->name('doctor.store');
Route::post('/login','DoctorController\LoginController@loginDoctor')->name('doctor/login');
Route::get('/{id}','DoctorController\DoctorController@show_doctor')->name('doctor');


});
//full calendar
Route::get('/full-calender', [FullCalenderController::class, 'index']);
Route::post('full-calender/action', [FullCalenderController::class, 'action']);
Route::get('/appoinment', [AppoinmentController::class, 'index']);
Route::post('appoinment/action', [AppoinmentController::class, 'action']);

Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('is_Admin');

Route::get('/clients',[AdminController::class,'getClientPage'])->name('clients');
Route::get('/services',[AdminController::class,'getServicePage'])->name('services');
Route::get('/docteurs',[DocteurController::class,'listDocteurs'])->name('docteurs');
Route::get('/services',[ServiceController::class,'listServices'])->name('services');
Route::get('/newDocteur',[DocteurController::class,'newDocteur']);
Route::get('/newService',[ServiceController::class,'newService']);
Route::get('/newClient',[ClientController::class,'newClient']);

Route::get('/appoinment',[FullCalenderontroller::class,'index'])->name('appoinment'); 


Route::post('addNewDoc',[DocteurController::class,'addNewDoctor'])->name('addNewDoc'); 
Route::get('deleteDoc/{id}',[DocteurController::class,'deleteDoctor'])->name('deleteDoc'); 


Route::get('/appoinment',[AdminController::class,'getAppoinmentPage'])->name('appoinment'); 
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/private', function (){
return 'bonjour';

    });


});





//inscreiption
Route::get('/inscription',[ClientController::class,'inscription']);
Route::post('/inscription',[ClientController::class,'inscription']);
//addspec et delete

Route::post('addNewServ',[ServiceController::class,'addNewServ'])->name('addNewServ'); 
Route::get('deleteServ/{id}',[ServiceController::class,'deleteServ'])->name('deleteServ'); 
 
Route::get('editService/{id}',[ServiceController::class,'editService'])->name('editService'); 
Route::put('updateServ/{id}',[ServiceController::class,'updateServ'])->name('updateServ'); 
Route::get('ShowServ',[ServiceController::class,'ShowupdateServ'])->name('ShowServ'); 
//

Route::get('/listUser',[UserController::class,'listUser']);
Route::post('listUser',[UserController::class,'listUser'])->name('listUser'); 
Route::get('clients',[UserController::class,'listUser'])->name('clients'); 
//update et show doc 

Route::get('UpdateDoc/{id}',[DocteurController::class,'UpdateDocFuntion'])->name('updatedoc'); 
Route::Post('UpdateDoc',[DocteurController::class,'UpdateDoc'])->name('updatedocpost'); 

Route::get('showdoc/{id}',[DocteurController::class,'showdoc'])->name('showdoc'); 

Route::get('UpdateServ/{id}',[ServiceController::class,'UpdateServFuntion'])->name('updateserv'); 
Route::Post('UpdateServ',[ServiceController::class,'UpdateServ'])->name('updateservpost'); 
Route::get('showserv/{id}',[ServiceController::class,'showserv'])->name('showserv'); 

Route::post('listEvent',[EventController::class,'listEvent'])->name('listEvent'); 
Route::get('events',[EventController::class,'listEvent'])->name('events'); 

// Route::get('admins',[AdminController\AdminController::class,'listAdmin'])->name('admins');
Route::get('admins','AdminController\AdminController@listAdmin')->name('admins');





