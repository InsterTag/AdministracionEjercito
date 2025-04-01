<?php

namespace App\Models;
use App\Models\Soldier;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;

class Barracks extends Model
{
    public function Soldiers()
    {
        return $this->hasMany('App\Models\Soldier');
    }

    public function Companies()
    {
        return $this->belongsToMany('App\Models\Company');
    }
}
