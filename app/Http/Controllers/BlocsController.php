<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voie;

class BlocsController extends Controller
{
    public function show(){

        $liste_blocs = \DB::table('voies')->where('type_voie', 'bloc')->get();
    
        return view('bloc', ['liste_blocs' => $liste_blocs]);
        
    }
    public function ascent($id){

        $url_voie = \DB::table('voies')->where('id', $id)->first();
        
        return view('ascent', [
            'url_voie' => $url_voie
        ]);
        
    }

}
