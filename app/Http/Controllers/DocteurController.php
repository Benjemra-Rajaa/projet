<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docteur;

class DocteurController extends Controller
{
    
    public function newDocteur(){
        $newDocteur=new Docteur();
        
        $newDocteur->name = "Fatimazahra armil";
        $newDocteur->specialite = "cardioloque";
        $newDocteur->adresse = "Rue mohamed 6, Agadir 80000 ";
        $newDocteur->telephone = "0528-77-54-54 ";
        $newDocteur->email = "Fatarmil@gmail.com ";
        $newDocteur->name = "Ahmed nouvatil";
        $newDocteur->specialite = "Dermathologue";
        $newDocteur->adresse = "Avenue zerktouni, Agadir 80000 ";
        $newDocteur->telephone = "0528-767-00-54 ";
        $newDocteur->email = "Nouvatil@gmail.com ";
        $newDocteur->name = "Mohamed benjaloun";
        $newDocteur->specialite = "genycoloque";
        $newDocteur->adresse = "9 Rue Yacoub El Mansour, Agadir 80000 ";
        $newDocteur->telephone = "0528-78-94-90 ";
        $newDocteur->email = "Mbenjaloun@gmail.com ";

        $newDocteur->save();
    }

    public function addNewDoctor(Request $request){
    // public function addNewDoctor(Docteur $docteur){

        //TODO validation

       $newDocteur = new Docteur();
       $newDocteur->name = $request->nom;
        $newDocteur->specialite = $request->specialite;
        $newDocteur->adresse = $request->adresse;
        $newDocteur->telephone = $request->telephone;
        $newDocteur->email = $request->email;

        $newDocteur->save();

        // $docteur->create();

        return redirect()->route("docteurs");

    }

    public function deleteDoctor($id){

        //TODO confirm before delete the doc

        $doc = Docteur::find($id);
        $doc->delete();

        return redirect()->route("docteurs");

    }

    public function listDocteurs() { // 
        
        $docteur=docteur::all();
       // dd($docteur);// 
       return view('layouts.Docteurs')->with('docteurs',$docteur);
    }
    public function UpdateDocFuntion(Request $request,$id)
    {
        //kantestew b3da wash kaywssel lfunction
       //echo 'ana hna '.$id;
     
         $docteur = Docteur::find($id);
        // // Getting values from the blade template form
        
        //  $doc->name =  $request->name;
        //  $doc->specialite =  $request->specialite;
        //  $doc->adresse=  $request->adresse;
        //  $doc->telephone =  $request->telephone;
        //  $doc->email=  $request->email;

       
       
        //  $doc->save();
 
        return view('layouts.updatedoc')->with('doc',$docteur);
    }

    public function UpdateDoc(Request $request)
    {
      
         $docteur = Docteur::find($request->id);
        // // Getting values from the blade template form 
       
        
         $docteur->name =  $request->name;
         $docteur->specialite =  $request->specialite;
         $docteur->adresse=  $request->adresse;
         $docteur->telephone =  $request->telephone;
         $docteur->email=  $request->email;

       
       
         $docteur->save();
 
        return redirect()->route('docteurs');
    }



   
    public function showdoc($id) 
    {
              
          
             $docteur = Docteur::find($id);
            
            // // Getting values from the blade template form 
           
           
    
           
            return view("layouts.showdoc")->with('docteur',$docteur);
      
    }
}
