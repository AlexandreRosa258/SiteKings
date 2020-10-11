<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Test;

class Proof extends Model
{

    protected $guarded = [];

    public function test(){
     return $this->belongsTo('App\Test','id');
    }

    public function user(){
        return $this->belongsTo('App\User','id');
    }
}
