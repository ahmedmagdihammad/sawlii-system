<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';

    protected $casts = [
        // 'languages' => 'array',
        // 'skills' => 'array',
    ];

    public function getsubcategory()
    {
    	return $this->belongsTo('App\subCategory', 'categories');
    }
}
