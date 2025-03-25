<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create() {
        return view('company');
        }

        public function agg_company(Request $request){
        $company = new Company();
        $company->actiP=$request->actiP;
    
        $company->save();
        return $company;
        }
}
