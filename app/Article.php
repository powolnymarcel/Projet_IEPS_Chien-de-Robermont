<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
protected $fillable=['titre','sluf','texte','photo','rubrique_id'];

    public function rubrique(){

        return $this->belongsTo('App\Rubrique');

    }

}
