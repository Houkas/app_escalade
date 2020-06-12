<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voie;

class PsicoblocsController extends Controller
{
    public function show(){

        $liste_psicoblocs = \DB::table('voies')->where('type_voie', 'psicobloc')->get();
    
        return view('psicobloc', ['liste_psicoblocs' => $liste_psicoblocs]);
        
    }
    public function ascent($id){

        $url_voie = \DB::table('voies')->where('id', $id)->first();
        
        return view('ascent', [
            'url_voie' => $url_voie
        ]);
        
    }

}
