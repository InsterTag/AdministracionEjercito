<?php

namespace App\Models;
use App\Models\Soldier;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function Soldiers()
    {
        return $this->hasMany('App\Models\Soldier');
    }

    public function Barracks()
    {
        return $this->belongsToMany('App\Models\Barracks');
    }
}
