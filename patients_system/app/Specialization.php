<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PainTypes;
class Specialization extends Model
{
    public function painTypes()
    {
      return $this->hasMany('App\PainTypes');
    }
    
}
