<?php

namespace App\Models;
use App\Models\Soldier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Services extends Model
{
    public function Soldiers()
    {
        return $this->belongsToMany('App\Models\Soldier');
    }
}
