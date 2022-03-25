<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function inscription(){
        $client = new Client;
        $client->name = request('name');
        $client->age = request('age');
        $client->email = request('email');
        $client->telephone = request('telephone');
        $client->description = request('description');
        $client->adresse= request('adresse');
        $client ->save();
    return 'Bien recu ';
        }
   

   
}

