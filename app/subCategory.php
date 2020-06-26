<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    public function getCategory()
    {
    	return $this->belongsTo('App\Category', 'category');
    }

    public function getfreelancer()
    {
    	return $this->hasMany('App\Freelancer', 'categories');
    }
}
