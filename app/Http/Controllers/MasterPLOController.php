<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterKurikulum;
use App\Models\MasterPLO;
use App\Imports\MasterPLOsImport;
use Maatwebsite\Excel\Facades\Excel;

class MasterPLOController extends Controller
{
    public function import() 
    {
        Excel::import(new MasterPLOsImport, request()->file('master_plos'));
        
        return redirect('');
    }

    public function index()
    {
        $plos = MasterPLO::all();
        return view('', compact('plos'));
    }

    public function create()
    {
        $kurikulums = MasterKurikulum::all();
        return view('', compact('kurikulums'));
    }

    public function store(Request $request)
    {
        MasterPLO::create([
            'kurikulum_id' => $request->kurikulum_id,
            'nomor_plo' => $request->nomor_plo,
            'nama_plo' => $request->nama_plo
        ]);
        return redirect('');
    }

    public function edit($plo_id)
    {
        $plos = MasterPLO::find($plo_id);
        return view('', compact('plos')); 
    }

    public function update(Request $request, $plo_id)
    {
        $plos = MasterPLO::find($plo_id);
        $plos -> update([
            'kurikulum_id' => $request->kurikulum_id,
            'nomor_plo' => $request->nomor_plo,
            'nama_plo' => $request->nama_plo
        ]);
        return redirect('');
    }
    
    public function destroy($plo_id)
    {
        $plos = MasterPLO::find($plo_id);
        $plos -> delete();
        return redirect('');
    }
}
