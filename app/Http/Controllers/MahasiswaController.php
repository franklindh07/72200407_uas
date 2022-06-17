<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswacount = Mahasiswa::count();
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], compact('mahasiswacount'));
    }

    public function pencarian(Request $request)
    {
        $mahasiswacount = Mahasiswa::count();
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], compact('mahasiswacount'));
    }   

    public function formmahasiswa()
    {
        return view('formmahasiswa');
    }

    public function simpanmahasiswa(Request $request)
    {
        $bidang_minat = implode(", ", $request->get('bidang_minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $bidang_minat
        ]);
        return redirect("/mahasiswa")->with('success', 'Data berhasil ditambah');
    }

    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa($id, Request $request)
    {
        $bidang_minat = implode(",", $request->bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $bidang_minat;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('error', 'Data berhasil diubah');
    }

    public function hapusmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('warning', 'Data berhasil dihapus');
    }

}
