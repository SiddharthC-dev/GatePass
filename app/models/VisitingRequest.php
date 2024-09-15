<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class VisitingRequest extends Model
{
    public function visitorProfile()
    {
        return $this->belongsTo('App\models\Visitor','visitor_id');
    }
}
