{{-- resources/views/admin/dashboard.blade.php --}}

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
          <li class="breadcrumb-item active">Prodi</li>
        </ol>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<a class="btn btn-primary" href="{{ url('prodi/tambah_prodi') }}">Tambah Prodi</a>
<br><br>
<div class="table-responsive">
        <table class="table table-bordered table-striped">
    <thead>    
    <tr>
            <th>@sortablelink('#')</th>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('jenjang_studi')</th>
            <th>@sortablelink('fakultas')</th>
            <th>@sortablelink('akreditasi')</th>
            <th>@sortablelink('program_studi')</th>
            <th>@sortablelink('ketua_program_studi')</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if($prodis->count())
            @foreach($prodis as $key => $prodi)
                <tr>
                    <td scope="row">{{ $key + 1 }}</td>
                    <td>{{ $prodi->id }}</td>
                    <td>{{ $prodi->jenjang_studi }}</td>
                    <td>{{ $prodi->fakultas }}</td>
                    <td>{{ $prodi->akreditasi }}</td>
                    <td>{{ $prodi->program_studi }}</td>
                    <td>{{ $prodi->ketua_program_studi }}</td>
                    <td><a href="prodi/edit_prodi/{{ $prodi->id }}"><i class="fa fa-edit"></a></i>
                        <form action="prodi/{{ $prodi->id }}"  method="post">
                          <button type="submit" onclick="return confirm('Kamu Yakin ingin menghapus data ini?')" name="submit"><i class="fa fa-trash"></i></button>
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          </form></td>
                  
                </tr>
               
            @endforeach
        @endif
        
    </tbody>
    </table>
    {!! $prodis->appends(request()->except('page'))->render() !!}
</div>
  
</div>
<!-- Logout Modal-->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
