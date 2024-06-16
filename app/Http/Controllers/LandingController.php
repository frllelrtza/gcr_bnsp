<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class LandingController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('welcome', compact('pegawai'));
    }
}
