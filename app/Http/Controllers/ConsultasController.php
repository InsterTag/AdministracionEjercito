<?php

namespace App\Http\Controllers;
use App\Models\Soldier;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function consulta(){
        $soldiers = Soldier::find(1);
        return $soldiers->ArmyCorp;
    }
}
