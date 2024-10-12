<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\NilaisImport;
use Maatwebsite\Excel\Facades\Excel;

class NilaiController extends Controller
{
    public function import() 
    {
        Excel::import(new NilaisImport, request()->file('nilais'));
        
        return redirect('/');
    }
}
