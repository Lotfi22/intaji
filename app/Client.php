<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function wilaya()
    {
        $wilaya =  Wilaya::find($this->wilaya);
        return $wilaya;
    }

    public function commune()
    {
        $commune =  Commune::find($this->commune);
        return $commune;

    }

}
