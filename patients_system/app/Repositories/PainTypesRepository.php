<?php
namespace App\Repositories;

use App\PainTypes;
use Illuminate\Support\Facades\Hash;

class PainTypesRepository
{
   
    public function getAllPainTypes()
    {
        return PainTypes::all();

    }
  

}
