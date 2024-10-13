<?php

namespace App\Http\Controllers;
use App\Imports\MasterIndicatorsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\MasterIndicator;

use Illuminate\Http\Request;

class MasterIndicatorController extends Controller
{
    // public function import() 
    // {
    //     Excel::import(new MasterIndicatorsImport, request()->file('master_indicators'));
        
    //     return redirect('/');
    // }
    public function showImportForm()
    {
        // Ambil semua data dari tabel master_indicators
        $dataIndikators = MasterIndicator::all();

        // Tampilkan view dan berikan data indikator ke view
        return view('master_indikator', compact('dataIndikators'));
    }

    public function import(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);

        try {
            // Mengimpor data menggunakan Excel dan menyimpan ke tabel master_indicators
            Excel::import(new MasterIndicatorsImport, $request->file('file'));

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Data berhasil diimport!');
        } catch (\Exception $e) {
            // Redirect dengan pesan error jika terjadi kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
