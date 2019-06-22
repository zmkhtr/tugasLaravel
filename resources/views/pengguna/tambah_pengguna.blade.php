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
  <li class="breadcrumb-item active">Tambah pengguna</li>
</ol>
<a class="btn btn-secondary" href="{{ URL::previous() }}">←Kembali</a>
<h3 class="card-title text-center"><b>Tambah Pengguna</b></h1>
<form action="tambah_pengguna" method="POST">
  @csrf
<div class="form-label-group"> <label for="nip">Nomor Induk Pegawai</label>
    <input type="number" name="nip" id="nip" class="form-control" placeholder="Nomor Induk Pegawai" required autofocus>
   
  </div>
  <br>
  <div class="form-label-group">  <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text"  name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required autofocus>
    
      <small id="emailHelpId" class="form-text text-muted"><a class="text-danger">*</a>Nama lengkap pengguna</small>
    </div>
    <br>
    <div class="form-label-group">   <label for="nama_panggilan">Nama Panggilan</label>
        <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control" placeholder="Nama Panggilan" required autofocus>
     
      </div>
      <br>
      <label for="alamat">Alamat</label>
      <div class="form-label-group">
          <textarea name="alamat" type="textArea" id="alamat" class="form-control" placeholder="Alamat" required autofocus></textarea>
        </div>
        <br>
      
      <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
            <option value="" selected disabled>-Belum Dipilih-</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
          <br>
          <div class="form-label-group">      <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="emailHelpId" required autofocus>
        
              <small id="emailHelpId" class="form-text text-muted"><a class="text-danger">*</a>Email akan digunakan sebagai username </small>
            </div>
            <br>
            <div class="form-group">
                <label for="level_divisi_pengguna">Level Divisi Pengguna</label>
                <select name="level_divisi_pengguna" class="form-control" id="level_divisi_pengguna" required>
                  <option value="" selected disabled>-Belum Dipilih-</option>
                  <option value="Level 1">Level 1</option>
                  <option value="Level 2">Level 2</option>
                  <option value="Level 3">Level 3</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="level_pengguna_di_divisi">Level Pengguna di Divisi</label>
                  <select name="level_pengguna_di_divisi" class="form-control" id="level_pengguna_di_divisi" required>
                    <option value="" selected disabled>-Belum Dipilih-</option>
                    <option value="Level 1">Level 1</option>
                    <option value="Level 2">Level 2</option>
                    <option value="Level 3">Level 3</option>
                  </select>
                </div>
                <div class="form-label-group">    <label for="telepon">Telepon</label>
                    <input type="number" name="telepon" id="telepon" class="form-control" placeholder="Telepon" required autofocus>
                
                  </div>
                  <br>
                  <div class="form-label-group">    <label for="handphone">Handphone</label>
                      <input type="number" name="handphone" id="handphone" class="form-control" placeholder="Handphone" required autofocus>
                  
                    </div>
                    <div class="form-group">
                        <label for="aktif">Aktif</label>
                        <select name="aktif" class="form-control" id="aktif" required>
                          <option value="" selected disabled>-Belum Dipilih-</option>
                          <option value="Aktif">Aktif</option>
                          <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="blokir">Blokir</label>
                          <select name="blokir" class="form-control" id="blokir" required>
                            <option value="" selected disabled>-Belum Dipilih-</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block">Simpan</button>
                        <br>
                      </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop