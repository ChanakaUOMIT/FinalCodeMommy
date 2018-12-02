<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table='posts';
    //primary Key
    protected $primaryKey='id';
    //Timestamps
    public $timesltamp=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
