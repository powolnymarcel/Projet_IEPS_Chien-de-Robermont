<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model {

	//
    //Permet de bloquer l'insertion aux champs défini ci dessous
    //On bloque l'utilisation de l'entité, du modèle à ces 3 champs là, on ne pourra uniquement remplir ces 3 champs là.

    protected $fillable=['titre','slug','photo','menu'];

    public function articles(){
        
        return $this->hasMany('App\Article');
    
    }


    
}
