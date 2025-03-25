<?php

namespace App\Http\Controllers;
use App\Models\Armycorp;
use Illuminate\Http\Request;

class ArmycorpController extends Controller
{
    public function create() {
        return view('armycorp');
        }

        public function agg_corp(Request $request){
        $armycorp = new Armycorp();
        $armycorp->denomination=$request->denomination;
    
        $armycorp->save();
        return $armycorp;
        }
}
