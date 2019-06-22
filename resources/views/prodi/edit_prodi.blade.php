
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a>Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Prodi</li>
        </ol>
        <a class="btn btn-secondary" href="{{ URL::previous() }}">←Kembali</a>
        <h3 class="card-title text-center"><b>Edit Prodi</b></h1>
      <form action="{{ $prodis->id }}" method="POST">
          @csrf
          <div class="form-group">
                <label for="jenjang_studi">Jenjang Studi</label>
                <select name="jenjang_studi" class="form-control" id="jenjang_studi" required>
                  <option value="{{ $prodis->jenjang_studi }}">{{ $prodis->jenjang_studi }}</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                </select>
              </div>
       <div class="form-label-group">   <label for="fakultas">Fakultas</label>
            <input value="{{ $prodis->fakultas }}" type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Fakultas" required autofocus>
         
          </div>
          <br>
          <div class="form-group">
                <label for="akreditasi">Akreditasi</label>
                <select name="akreditasi" class="form-control" id="akreditasi" required>
                  <option value="{{ $prodis->akreditasi }}" >{{ $prodis->akreditasi }}</option>
                  <option value="Berakreditasi A">Berakreditasi A</option>
                  <option value="Berakreditasi B">Berakreditasi B</option>
                  <option value="Berakreditasi C">Berakreditasi C</option>
                </select>
              </div>
              <br>
              <div class="form-label-group">    <label for="program_studi">Program Studi</label>
                    <input value="{{ $prodis->program_studi }}" type="text" name="program_studi" id="program_studi" class="form-control" placeholder="Program Studi" required autofocus>
                
                  </div>
                  <br>
                  <div class="form-label-group"><label for="ketua_program_studi">Ketua Program Studi</label>
                        <input value="{{ $prodis->ketua_program_studi }}" type="text" name="ketua_program_studi" id="ketua_program_studi" class="form-control" placeholder="Ketua Program Studi" required autofocus>
                        
                      </div>
                        <br>
                                
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