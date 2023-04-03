<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    Public function store(Request $request)
    {
        //check data
        $cek = Absen::where([
            'id_siswa' => $request->id_siswa,
            'tanggal' => date('Y-m-d H:i:s')
        ])->first();

        if($cek){
            return redirect('/')->with('failed', 'Student already recorded');
        }

        Absen::create([
            'id_siswa' => $request->id_siswa,
            'tanggal' => date('Y-m-d H:i:s')
        ]);

        return redirect('faculty/event/attendance/scan')->with('success', 'Student recorded');
    }
}
