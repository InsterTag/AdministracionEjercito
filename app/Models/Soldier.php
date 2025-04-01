<?php

namespace App\Models;
use App\Models\Services;
use App\Models\Armycorp;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    public function Services()
    {
        return $this->belongsToMany('App\Models\Services');
    }

    public function ArmyCorp()
    {
        return $this->belongsTo('App\Models\Armycorp');
    }
    
    public function Barracks()
    {
        return $this->belongsTo('App\Models\Barracks');
    }

    public function Company()
    {
        return $this->belongsTo('App\Models\Company');
    }


}
