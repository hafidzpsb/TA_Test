<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\MasterQuestionsImport;
use Maatwebsite\Excel\Facades\Excel;

class MasterQuestionController extends Controller
{
    public function import() 
    {
        Excel::import(new MasterQuestionsImport, request()->file('master_quetions'));
        
        return redirect('/');
    }
}
