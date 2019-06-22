{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a>Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Edit pengguna</li>
  </ol>
  <a class="btn btn-secondary" href="{{ URL::previous() }}">←Kembali</a>
  <h3 class="card-title text-center"><b>Edit Pengguna</b></h1>
<form action="{{ $penggunas->id }}" method="post">
    @csrf
 <div class="form-label-group">
    <label for="nip">Nomor Induk Pegawai</label>
      <input value="{{ $penggunas->nip }}" type="number" name="nip" id="nip" class="form-control" placeholder="Nomor Induk Pegawai" required autofocus>
   
    </div>
    <br>
    <div class="form-label-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input value="{{ $penggunas->nama_lengkap }}"type="text"  name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required autofocus>
        <small id="emailHelpId" class="form-text text-muted"><a class="text-danger">*</a>Nama lengkap pengguna</small>
      </div>
      <br>
      <div class="form-label-group">
          <label for="nama_panggilan">Nama Panggilan</label>
          <input value="{{ $penggunas->nama_panggilan}}" type="text" name="nama_panggilan" id="nama_panggilan" class="form-control" placeholder="Nama Panggilan" required autofocus>
        
        </div>
        <br>
        <label for="alamat">Alamat</label>
        <div class="form-label-group">
            <textarea name="alamat" type="textArea" id="alamat" class="form-control" placeholder="Alamat" required autofocus>{{ $penggunas->alamat }}</textarea>
          </div>
          <br>
        
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
              <option value="{{ $penggunas->jenis_kelamin }}" >{{ $penggunas->jenis_kelamin }}</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
            <br>
            <div class="form-label-group">        <label for="email">Email</label>
                <input value="{{ $penggunas->email }}" type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="emailHelpId" required autofocus>
        
                <small id="emailHelpId" class="form-text text-muted"><a class="text-danger">*</a>Email akan digunakan sebagai username </small>
              </div>
              <br>
              <div class="form-group">
                  <label for="level_divisi_pengguna">Level Divisi Pengguna</label>
                  <select name="level_divisi_pengguna" class="form-control" id="level_divisi_pengguna" required>
                    <option value="{{ $penggunas->level_divisi_pengguna }}">{{ $penggunas->level_divisi_pengguna }}</option>
                    <option value="Level 1">Level 1</option>
                    <option value="Level 2">Level 2</option>
                    <option value="Level 3">Level 3</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="level_pengguna_di_divisi">Level Pengguna di Divisi</label>
                    <select name="level_pengguna_di_divisi" class="form-control" id="level_pengguna_di_divisi" required>
                      <option value="{{ $penggunas->level_pengguna_di_divisi }}">{{ $penggunas->level_pengguna_di_divisi }}</option>
                      <option value="Level 1">Level 1</option>
                      <option value="Level 2">Level 2</option>
                      <option value="Level 3">Level 3</option>
                    </select>
                  </div>
                  <div class="form-label-group"><label for="telepon">Telepon</label>
                      <input value="{{ $penggunas->telepon }}" type="number" name="telepon" id="telepon" class="form-control" placeholder="Telepon" required autofocus>
                      
                    </div>
                    <br>
                    <div class="form-label-group">   <label for="handphone">Handphone</label>
                        <input value="{{ $penggunas->handphone }}" type="number" name="handphone" id="handphone" class="form-control" placeholder="Handphone" required autofocus>
                     
                      </div>
                      <div class="form-group">
                          <label for="aktif">Aktif</label>
                          <select name="aktif" class="form-control" id="aktif" required>
                            <option value="{{ $penggunas->aktif }}" >{{ $penggunas->aktif }}</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="blokir">Blokir</label>
                            <select name="blokir" class="form-control" id="blokir" required>
                              <option value="{{ $penggunas->blokir }}" >{{ $penggunas->blokir }}</option>
                              <option value="Ya">Ya</option>
                              <option value="Tidak">Tidak</option>
                            </select>
                          </div>
                          <input type="submit" name="submit" class="btn btn-success" value="Simpan Perubahan">
                          <input type="hidden" name="_method" value="PUT">
                          <a class="btn btn-outline-danger" href="{{ URL::previous() }}">Cancel</a>
                          <br><br>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
 