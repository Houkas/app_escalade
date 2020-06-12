<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voie;

class VoiesController extends Controller
{

    public function show() {

        $liste_voies = \DB::table('voies')->get();
    
        return view('voie', ['liste_voies' => $liste_voies]);
    }

    public function ascent($id){

        //$url_voie = \DB::table('voies')->where('id', $id)->first();

        //id inexistant dans url retourne une 404
        $url_voie = Voie::findOrFail($id);

        return view('ascent', [
            'url_voie' => $url_voie
        ]);
        
    }

    public function create(){
        return view('create');
    }

    public function store(){

        request()->validate([
            'nom'=>'required',
            'difficulte'=>['required','min:2','max:3'],
            'type_voie'=>'required',
            'lieu'=>'required',
        ]);

       $voie = new Voie();
       $voie->nom = request('nom');
       $voie->type_voie = request('type_voie');
       $voie->difficulte = request('difficulte');
       $voie->lieu = request('lieu');
       //$voie->realisee = request('realisee');

       $voie->save();

       return redirect($voie->path());
       
    }

    public function edit($id){
        $voie = Voie::find($id);
        return view('edit', compact('voie'));
    }

    public function update($id){
        request()->validate([
            'nom'=>'required',
            'difficulte'=>['required','min:2','max:3'],
            'type_voie'=>'required',
            'lieu'=>'required',
        ]);
        $voie = Voie::find($id);
        $voie->nom = request('nom');
        $voie->type_voie = request('type_voie');
        $voie->difficulte = request('difficulte');
        $voie->lieu = request('lieu');
        $voie->img_un = request('img_un');
        $voie->img_deux = request('img_deux');
        $voie->img_trois = request('img_trois');
        //$voie->realisee = request('realisee');

 
        $voie->save();

        return redirect($voie->path());
    }

    public function delete($id){
        $voie = Voie::find($id);
        $voie->delete();

        return redirect('/voies')->with('success', 'Voie deleted!');
    }
}
