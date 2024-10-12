<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterMK;
use App\Imports\MasterMKsImport;
use Maatwebsite\Excel\Facades\Excel;

class MasterMKController extends Controller
{
    public function import() 
    {
        Excel::import(new MasterMKsImport, request()->file('master_mks'));
        
        return redirect('/');
    }

    public function index()
    {
        $mks = MasterMK::all();
        return view('', compact('mks'));
    }

    public function create()
    {
        return view('', compact('mks'));
    }

    public function store(Request $request)
    {
        MasterMK::create([
            'nomor_mk' => $request->nomor_mk,
            'kode_mk' => $request->kode_mk,
            'tingkat_mk' => $request->tingkat_mk,
            'semester' => $request->semester
        ]);
        return redirect('');
    }

    public function edit($mk_id)
    {
        $mks = MasterMK::find($mk_id);
        return view('', compact('mks')); 
    }

    public function update(Request $request, $mk_id)
    {
        $mks = MasterMK::find($clo_id);
        $mks -> update([
            'nomor_mk' => $request->nomor_mk,
            'kode_mk' => $request->kode_mk,
            'tingkat_mk' => $request->tingkat_mk,
            'semester' => $request->semester
        ]);
        return redirect('');
    }
    
    public function destroy($mk_id)
    {
        $mks = MasterMK::find($mk_id);
        $mks -> delete();
        return redirect('');
    }
}
