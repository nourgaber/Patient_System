<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PainTypes extends Model
{
    public function specialization()
    {
      return $this->belongsTo('specializations');
    }
}
