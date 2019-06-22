<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $penggunas = Pengguna::sortable()->paginate(10);
        return view('pengguna/pengguna',compact('penggunas'));
    }
    public function tambah(Request $request)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nama_lengkap'=>'required',
            'nama_panggilan'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'email'=>'required',
            'level_divisi_pengguna'=>'required',
            'level_pengguna_di_divisi'=>'required',
            'telepon'=>'required',
            'handphone'=>'required',
            'aktif'=>'required',
            'blokir'=>'required',
        ]);
        $pengguna = new Pengguna();
        $pengguna->nip = $request->nip;
        $pengguna->nama_lengkap = $request->nama_lengkap;
        $pengguna->nama_panggilan = $request->nama_panggilan;
        $pengguna->alamat = $request->alamat;
        $pengguna->jenis_kelamin = $request->jenis_kelamin;
        $pengguna->email = $request->email;
        $pengguna->level_divisi_pengguna = $request->level_divisi_pengguna;
        $pengguna->level_pengguna_di_divisi = $request->level_pengguna_di_divisi;
        $pengguna->telepon = $request->telepon;
        $pengguna->handphone = $request->handphone;
        $pengguna->aktif = $request->aktif;
        $pengguna->blokir = $request->blokir;
        $pengguna->save();
        return redirect('pengguna')->with('message','Berhasil Menambahkan Pengguna'); 
        // view('pengguna/tambah_pengguna',compact('penggunas'));
    }
    public function viewTambah()
    {
    return view('pengguna/tambah_pengguna',compact('penggunas'));
    }
    public function show($id)
    {
        $penggunas = Pengguna::find($id);
        return view('pengguna/edit_pengguna',compact('penggunas'));
        // view('pengguna/tambah_pengguna',compact('penggunas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nama_lengkap'=>'required',
            'nama_panggilan'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'email'=>'required',
            'level_divisi_pengguna'=>'required',
            'level_pengguna_di_divisi'=>'required',
            'telepon'=>'required',
            'handphone'=>'required',
            'aktif'=>'required',
            'blokir'=>'required',
        ]);
        $pengguna = Pengguna::find($id);
        $pengguna->nip = $request->nip;
        $pengguna->nama_lengkap = $request->nama_lengkap;
        $pengguna->nama_panggilan = $request->nama_panggilan;
        $pengguna->alamat = $request->alamat;
        $pengguna->jenis_kelamin = $request->jenis_kelamin;
        $pengguna->email = $request->email;
        $pengguna->level_divisi_pengguna = $request->level_divisi_pengguna;
        $pengguna->level_pengguna_di_divisi = $request->level_pengguna_di_divisi;
        $pengguna->telepon = $request->telepon;
        $pengguna->handphone = $request->handphone;
        $pengguna->aktif = $request->aktif;
        $pengguna->blokir = $request->blokir;
        $pengguna->save();
        return redirect('pengguna')->with('message', 'Berhasil Edit Pengguna !');
    }

    public function destroy($id)
    {
      $pengguna = Pengguna::find($id);
      $pengguna->delete();
      return redirect('pengguna')->with('message', 'Berhasil Menghapus Pengguna !');
    }

}
