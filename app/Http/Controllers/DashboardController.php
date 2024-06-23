<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalPria = Pegawai::where('jenis_kelamin', 'Laki-laki')->count();
        $totalWanita = Pegawai::where('jenis_kelamin', 'Perempuan')->count();
        $totalKeseluruhan = Pegawai::count();
        $pegawai = Pegawai::all();

        if ($request->ajax()) {
            return response()->json([
                'totalPria' => $totalPria,
                'totalWanita' => $totalWanita,
                'totalKeseluruhan' => $totalKeseluruhan,
                'pegawai' => $pegawai,
            ]);
        }

        return view('dashboard.index', compact('totalPria', 'totalWanita', 'totalKeseluruhan', 'pegawai'));
    }
}