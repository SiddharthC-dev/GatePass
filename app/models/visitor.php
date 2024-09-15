<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public function apartment(){
        return $this->belongsTo('App\models\Apartment','apartment_id');
       }
}
