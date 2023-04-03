<?php

namespace App\Http\Controllers;
use App\Models\Attendance;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    Public function store(Request $request)
    {
        //check data
        $cek = Attendance::where([
            'id_student' => $request->id_student,
            'scanned_at' => now()
        ])->first();

        if($cek){
            return redirect('/')->with('failed', 'Student already recorded');
        }

        Attendance::create([
            'id_siswa' => $request->id_siswa,
            'tanggal' => date('Y-m-d')
        ]);

        return redirect('/')->with('success', 'Student recorded');
    }
}
