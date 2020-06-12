<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voie;

class FalaisesController extends Controller
{
    public function show(){

        $liste_falaises = \DB::table('voies')->where('type_voie', 'falaise')->get();
    
        return view('falaise', ['liste_falaises' => $liste_falaises]);
        
    }
    public function ascent($id){

        $url_voie = \DB::table('voies')->where('id', $id)->first();
        
        return view('ascent', [
            'url_voie' => $url_voie
        ]);
        
    }

}
