<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function getcategory()
    {
    	return $this->belongsTo('App\Category', 'category');
    }
    public function getsubcategory()
    {
    	return $this->belongsTo('App\subCategory', 'subcategory');
    }

    public function getserviceaddon()
    {
    	return $this->hasMany('App\Serviceaddon', 'service');
    }
}
