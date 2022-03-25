<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    public function newService(){
        $newService=new Service();
        $newService->name = "Cardiologie";
        $newService->name = "neurologie";
        $newService->name = "genycologie";
        

        

        $newService->save();
        return redirect()->route("services");
    }
      
    public function listServices() {
        
        $service=service::all();
      
       return view('layouts.Services')->with('services',$service);
    }

    public function addNewServ(Request $request){
        
    
            //TODO validation
    
           $newService = new Service();
           $newService->name = $request->nom;
            
    
            $newService->save();
    
        
    
            return redirect()->route("services");
    
        }
        public function deleteServ($id){

            //TODO confirm before delete the doc
    
            $serv = Service::find($id);
            $serv->delete();
    
            return redirect()->route("services");
    
        }
        public function UpdateServFuntion(Request $request,$id)
    {
        
     
         $service = Service::find($id);
        
 
        return view('layouts.updateserv')->with('serv',$service );
    }
      
    public function updateServ(Request $request)
    {
      
         $service= Service::find($request->id);
        // // Getting values from the blade template form 
       
        
         $service->name =  $request->name;
       
         $service->save();
 
        return redirect()->route('services');
    }
   
    public function showserv($id) 
    {
              
          
             $service = Service ::find($id);
            
            // // Getting values from the blade template form 
           
           
    
           
            return view("layouts.showserv")->with('service',$service);
      
    }

}