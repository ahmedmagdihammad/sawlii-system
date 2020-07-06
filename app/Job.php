<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $casts = [
        'files' => 'array',
    ];

    public function getcategory()
    {
    	return $this->belongsTo('App\Category', 'category');
    }

    public function getsubcategory()
    {
    	return $this->belongsTo('App\subCategory', 'subcategory');
    }
}
