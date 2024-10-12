<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterMK;
use App\Models\MasterAssessment;
use App\Imports\MasterAssessmentsImport;
use Maatwebsite\Excel\Facades\Excel;

class MasterAssessmentController extends Controller
{
    public function import() 
    {
        Excel::import(new MasterAssessmentsImport, request()->file('master_assessments'));
        
        return redirect('/');
    }

    public function index()
    {
        $assessments = MasterAssessment::all();
        return view('', compact('assessments'));
    }

    public function create()
    {
        $mks = MasterMK::all();
        return view('', compact('mks'));
    }

    public function store(Request $request)
    {
        /* MasterAssessment::create([
            'nomor_mk' => $request->nomor_mk,
            'kode_mk' => $request->kode_mk,
            'tingkat_mk' => $request->tingkat_mk,
            'semester' => $request->semester
        ]); */
        return redirect('');
    }

    public function edit($assessment_id)
    {
        $assessments = MasterAssessment::find($assessment_id);
        return view('', compact('assessments')); 
    }

    public function update(Request $request, $assessment_id)
    {
        $assessments = MasterAssessment::find($assessment_id);
        /* $assessments -> update([
            'nomor_mk' => $request->nomor_mk,
            'kode_mk' => $request->kode_mk,
            'tingkat_mk' => $request->tingkat_mk,
            'semester' => $request->semester
        ]); */
        return redirect('');
    }
    
    public function destroy($assessment_id)
    {
        $assessments = MasterAssessment::find($assessment_id);
        $assessments -> delete();
        return redirect('');
    }
}
