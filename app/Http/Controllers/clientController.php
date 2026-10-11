<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class clientController extends Controller
{
    //
    public function acceil(){
     return view("client.acceil");   
    }
     public function boutique(){
     return view("client.boutique");   
    }
     public function panier(){
     return view("client.panier");   
    }
    public function paiement(){
     return view("client.paiement");   
    }
    public function enregistrer(){
     return view("client.enregistrer");   
    }
     public function sauvegarder(){
     return view("client.sauvegarder");   
    }
}
