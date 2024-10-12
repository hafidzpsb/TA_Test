<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterCLO;
use App\Imports\MasterCLOsImport;
use Maatwebsite\Excel\Facades\Excel;

class MasterCLOController extends Controller
{
    public function import() 
    {
        Excel::import(new MasterCLOsImport, request()->file('master_clos'));
        
        return redirect('');
    }

    public function index()
    {
        $clos = MasterCLO::all();
        return view('', compact('clos'));
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        MasterCLO::create([
            'nomor_clo' => $request->nomor_clo,
            'nama_clo' => $request->nama_clo
        ]);
        return redirect('');
    }

    public function edit($clo_id)
    {
        $clos = MasterCLO::find($clo_id);
        return view('', compact('clos')); 
    }

    public function update(Request $request, $clo_id)
    {
        $clos = MasterCLO::find($clo_id);
        $clos -> update([
            'nomor_clo' => $request->nomor_clo,
            'nama_clo' => $request->nama_clo
        ]);
        return redirect('');
    }
    
    public function destroy($clo_id)
    {
        $clos = MasterCLO::find($clo_id);
        $clos -> delete();
        return redirect('');
    }
}
