<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MasterKurikulum;

class MasterKurikulumController extends Controller
{
    public function index()
    {
        $kurikulums = MasterKurikulum::all();
        return view('', compact('kurikulums'));
    }

    public function create()
    {
        $users = User::all();
        return view('', compact('users'));    
    }

    public function store(Request $request)
    {
        MasterKurikulum::create([
            'user_id' => $request->user_id,
            'tahun_kurikulum' => $request->tahun_kurikulum
        ]);
        return redirect('');
    }

    public function edit($kurikulum_id)
    {
        $kurikulums = MasterKurikulum::find($kurikulum_id);
        return view('', compact('kurikulums')); 
    }

    public function update(Request $request, $kurikulum_id)
    {
        $kurikulums = MasterKurikulum::find($kurikulum_id);
        $kurikulums -> update([
            'user_id' => $request->user_id,
            'tahun_kurikulum' => $request->tahun_kurikulum
        ]);
        return redirect('');
    }

    public function destroy($kurikulum_id)
    {
        $kurikulums = MasterKurikulum::find($kurikulum_id);
        $kurikulums -> delete();
        return redirect('');
    }
}
