<?php

namespace App\Http\Controllers;
use App\Imports\MasterIndicatorsImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class MasterIndicatorController extends Controller
{
    public function import() 
    {
        Excel::import(new MasterIndicatorsImport, request()->file('master_indicators'));
        
        return redirect('/');
    }
}
