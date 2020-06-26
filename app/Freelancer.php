<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';

    public function getSubcategory()
    {
    	return $this->belongsTo('App\subCategory', 'categories');
    }
}
