<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;

class ProdiController extends Controller
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
        $prodis = Prodi::sortable()->paginate(10);
        return view('prodi/prodi',compact('prodis'));
    }
    public function tambah(Request $request)
    {
        $this->validate($request,[
            'jenjang_studi'=>'required',
            'fakultas'=>'required',
            'akreditasi'=>'required',
            'program_studi'=>'required',
            'ketua_program_studi'=>'required',
        ]);
        $prodi = new Prodi();
        $prodi->jenjang_studi = $request->jenjang_studi;
        $prodi->fakultas = $request->fakultas;
        $prodi->akreditasi = $request->akreditasi;
        $prodi->program_studi = $request->program_studi;
        $prodi->ketua_program_studi = $request->ketua_program_studi;
        $prodi->save();
        return redirect('prodi')->with('message', 'Berhasil Tambah Prodi !');
        // view('pengguna/tambah_pengguna',compact('penggunas'));
    }
    public function viewTambah()
    {
    return view('prodi/tambah_prodi',compact('prodi'));
    }
    public function show($id)
    {
        $prodis = Prodi::find($id);
        return view('prodi/edit_prodi',compact('prodis'));
        // view('pengguna/tambah_pengguna',compact('penggunas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'jenjang_studi'=>'required',
            'fakultas'=>'required',
            'akreditasi'=>'required',
            'program_studi'=>'required',
            'ketua_program_studi'=>'required',
        ]);
        $prodi =  Prodi::find($id);
        $prodi->jenjang_studi = $request->jenjang_studi;
        $prodi->fakultas = $request->fakultas;
        $prodi->akreditasi = $request->akreditasi;
        $prodi->program_studi = $request->program_studi;
        $prodi->ketua_program_studi = $request->ketua_program_studi;
        $prodi->save();
        return redirect('prodi')->with('message', 'Berhasil Edit Prodi !');
    }

    public function destroy($id)
    {
      $prodi = Prodi::find($id);
      $prodi->delete();
      return redirect('prodi')->with('message', 'Berhasil Menghapus Prodi !');
      
    }

}
