<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\MasterMahasiswasImport;
use Maatwebsite\Excel\Facades\Excel;

class MasterMahasiswaController extends Controller
{
    public function import() 
    {
        Excel::import(new MasterMahasiswasImport, request()->file('master_mahasiswas'));
        
        return redirect('/');
    }
}
