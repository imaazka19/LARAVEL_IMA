<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;


class Sekolahcontroller extends Controller
{
    public function index()
    {
        $sekolahs =Sekolah::all();
        return view('sekolahs.index') ->with ('sekolahs',$sekolahs);
    }

    public function tambah()
    {
        $sekolahs =Sekolah::all();
        return view('sekolahs.tambah') ->with ('sekolahs',$sekolahs);
    }

    public function simpan(Request $request)
    {
        $sekolah =new sekolah();

        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat_sekolah = $request->alamat_sekolah;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;

        $sekolah->save();

        return redirect()->route('sekolah.index');

    }

    public function edit($id)
    {
        $sekolahs= sekolah::find($id);
        return view('sekolahs.edit', [
        'sekolah' => $sekolahs,
        ]);
    }

    public function update(Request $request, $id) 
{
    $sekolah = sekolah::find($id);

       $sekolah->nama_sekolah = $request->nama_sekolah;
       $sekolah->alamat_sekolah = $request->alamat_sekolah;
       $sekolah->jurusan = $request->jurusan;
       $sekolah->jumlah_guru = $request->jumlah_guru;

       $sekolah->save();

       return redirect()->route('sekolah.index');
}

public function destroy($id) 
{
    $sekolah = sekolah::find($id);

    $sekolah->delete();
    
    return redirect()->route('sekolah.index');

}

}
