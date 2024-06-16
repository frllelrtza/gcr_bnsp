<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Http\RedirectResponse;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $pegawai = Pegawai::orderBy('created_at', 'DESC')->get();
    
        $query = Pegawai::query();
    
        if ($request->has('jenis_kelamin') && $request->jenis_kelamin != '') {
            $query->where('jenis_kelamin', $request->jenis_kelamin);
        }
    
        $pegawai = $query->get();
        
        return view('dashboard.pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate request data
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Handle file upload
        $file = $request->file('foto');
        $name = time() . '_' . $file->getClientOriginalName(); // Ensure unique filename
        $tujuan_upload = 'pegawai'; // Specify the folder within the public disk
        $file->storeAs($tujuan_upload, $name, 'public');

        // Create the pegawai
        Pegawai::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'foto' => $name,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan');
    }

    
    public function show($id)
{
    $pegawai = Pegawai::findOrFail($id);
    return view('dashboard.pegawai.show', compact('pegawai'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('dashboard.pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $pegawai = Pegawai::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'foto' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->email = $request->email;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = time() . '_' . $file->getClientOriginalName(); // Ensure unique filename
            $tujuan_upload = 'pegawai';
            $file->storeAs($tujuan_upload, $name, 'public');
            $pegawai->foto = $name;
        }

        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Cari pegawai berdasarkan ID
        $pegawai = Pegawai::findOrFail($id);

        // Hapus pegawai
        $pegawai->delete();

        // Redirect ke index dengan pesan sukses
        return redirect()->route('pegawai.index')->with('success', 'Data berhasil dihapus');
    }
}
