<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviceaddon extends Model
{
    public function getservice()
    {
    	return $this->belongsTo('App\Service', 'service');
    }
}
