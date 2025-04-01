<?php

namespace App\Models;
use App\Models\Soldier;
use Illuminate\Database\Eloquent\Model;

class Armycorp extends Model
{
    public function Soldiers()
    {
        return $this->hasMany('App\Models\Soldier');
    }
}
