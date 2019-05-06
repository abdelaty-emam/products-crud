<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['name','category','price'];
    public $timestamps = false;
    public function categoryr(){

        return $this->belongsTo('App\Categories','category','category_id');
        
    }
}
