<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proof;

class Test extends Model
{
      protected $guarded = [];

      public function proofs(){
        return $this->hasMany('App\Proof','id');
      }

      public static function boot(){
        parent::boot();
        static::deleting(function($test){
          $test->proofs()->delete();
        });
      }
}
