<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voie extends Model
{
    public function toggle_realisee(){

        $this->realisee = !$this->realisee;

        $this->save();

    }
    
    public function path(){
        return route('voies.ascent', $this);
    }
}
