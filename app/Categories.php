<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected  $table="categoris";
    protected $fillable = ['category_id','category_name'];



    
}
