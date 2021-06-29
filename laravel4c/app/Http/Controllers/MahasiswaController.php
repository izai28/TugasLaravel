<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact ('mahasiswa'));
    }

    public function create()
    {
        return view ('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        alert()->success('Success','Data Berhasil Disimpan.');
        return redirect() ->route('indexmahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit' , compact('mahasiswa'));
    }

    public function update(Request $request , $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect() ->route('indexmahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();
        toast('Data Telah di Hapus','success');
        return redirect() ->route('indexmahasiswa');

    }


}