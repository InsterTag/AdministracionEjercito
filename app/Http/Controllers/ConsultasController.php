<?php

namespace App\Http\Controllers;
use App\Models\Soldier;
use App\Models\Barracks;
use App\Models\Company;
use App\Models\Services;
use App\Models\Armycorp;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    // Mostrar todos los soldados 
    public function consulta1(){
        $soldiers = Soldier::all();
        return $soldiers;
    }
    // Mostrar todos las compañias
    public function consulta2(){
        $company = Company::all();
        return $company;
    }
    // Mostrar todos los cuarteles
    public function consulta3(){
        $barracks = Barracks::all();
        return $barracks;
    }
    // Mostrar todos los servicios
    public function consulta4(){
        $services = Services::all();
        return $services;
    }
    // Mostrar todsos los armycorp
    public function consulta5(){
        $armycorp = Armycorp::all();
        return $armycorp;
    }



    // Mostrar todos los soldados de un servicio
    public function consulta6(){
        $services = Services::find(1);
        return $services->soldiers;
    }



    // Mostrar todos los soldados de armycorp
    public function consulta7(){
        $armycorp = Armycorp::find(1);
        return $armycorp->soldiers;
    }
    


    // Mostrar todos los soldados de una compañia
    public function consulta8(){
        $company = Company::find(1);
        return $company->soldiers;
    }
    // Mostrar todos los cuarteles de una compañia
    public function consulta9(){
        $company = Company::find(1);
        return $company->barracks;
    }



    // Mostrar todos los soldados de un cuartel
    public function consulta10(){
        $barracks = Barracks::find(1);
        return $barracks->soldiers;
    }
    // Mostrar todas las compañias de un cuartel
    public function consulta11(){
        $barracks = Barracks::find(1);
        return $barracks->company;
    }




    // Mostrar todos los cuarteles de un soldado
    public function consulta12(){
        $soldiers = Soldier::find(1);
        return $soldiers->barracks;
    }
    // Mostrar todos los servicios de un soldado
    public function consulta13(){
        $soldiers = Soldier::find(1);
        return $soldiers->services;
    }
    // Mostrar todos las compañias de un soldado
    public function consulta14(){
        $soldiers = Soldier::find(1);
        return $soldiers->company;
    } 
    // Mostrar todos los armycorp de un soldado
    public function consulta15(){
        $soldiers = Soldier::find(1);
        return $soldiers->armycorp;
    }




    public function consulta_attach(){
        $soldiers = Soldier::find(1);
        $soldiers->Services()->attach(1);

        return $soldiers;
    }
}
