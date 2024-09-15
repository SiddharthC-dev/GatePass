<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Gaurd extends Model

{
    use HasApiTokens, Notifiable;
   protected $guarded = [ ];
//    protected
   public function apartment(){
    return $this->belongsTo('App\models\Apartment','apartment_id');
   }
}
