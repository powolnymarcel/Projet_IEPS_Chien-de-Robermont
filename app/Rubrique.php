<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model {

	//

    protected $fillable=['titre','slug','photo','menu'];

    public function articles(){
        
        return $this->hasMany('App\Article');
    
    }


    
}
