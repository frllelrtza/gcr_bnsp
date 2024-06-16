<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class DashboardController extends Controller
{
    public function index()
{
    $totalPria = Pegawai::where('jenis_kelamin', 'Laki-laki')->count();
    $totalWanita = Pegawai::where('jenis_kelamin', 'Perempuan')->count();
    $totalKeseluruhan = Pegawai::count();
    $pegawai = Pegawai::all();

    return view('dashboard.index', compact('totalPria', 'totalWanita', 'totalKeseluruhan','pegawai'));
}
}
