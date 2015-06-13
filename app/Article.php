<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {


    //Permet de bloquer l'insertion aux champs défini ci dessous
    //On bloque l'utilisation de l'entité, du modèle à ces 3 champs là, on ne pourra uniquement remplir ces 3 champs là.
    protected $fillable=['titre','slug','texte','photo','rubrique_id'];


    // protected $table = 'LE NO DE LA TABlE DANS MYSQL';

   // Si on récupère les données en JSON, ON POURRA CACHER CERTAIN CHAMPS
    // OBFUSCATION DE CHAMPS
   // protected $hidden= ['MOT DE PASSE', 'Le TOKEN'];


    public function rubrique(){
        return $this->belongsTo('App\Rubrique');
    }

}
