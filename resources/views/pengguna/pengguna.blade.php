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
          <li class="breadcrumb-item active">Pengguna</li>
        </ol>
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<a class="btn btn-primary" href="{{ url('pengguna/tambah_pengguna') }}">Tambah Pengguna</a>
<br><br>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
    <thead>    
    <tr>
            <th class="text-center">@sortablelink('#')</th>
            <th class="text-center">@sortablelink('nip')</th>
            <th class="text-center">@sortablelink('nama_lengkap')</th>
            <th class="text-center">@sortablelink('nama_panggilan')</th>
            <th class="text-center">@sortablelink('alamat')</th>
            <th class="text-center">@sortablelink('jenis_kelamin')</th>
            <th class="text-center">@sortablelink('email')</th>
            <th class="text-center">@sortablelink('level_divisi_pengguna')</th>
            <th class="text-center">@sortablelink('level_pengguna_di_divisi')</th>
            <th class="text-center">@sortablelink('telepon')</th>
            <th class="text-center">@sortablelink('handphone')</th>
            <th class="text-center">@sortablelink('aktif')</th>
            <th class="text-center">@sortablelink('blokir')</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if($penggunas->count())
            @foreach($penggunas as $key => $pengguna)
                <tr>
                    <td scope="row">{{ $key + 1 }}</td>
                    <td>{{ $pengguna->nip }}</td>
                    <td>{{ $pengguna->nama_lengkap }}</td>
                    <td>{{ $pengguna->nama_panggilan }}</td>
                    <td>{{ $pengguna->alamat }}</td>
                    <td>{{ $pengguna->jenis_kelamin }}</td>
                    <td>{{ $pengguna->email }}</td>
                    <td>{{ $pengguna->level_divisi_pengguna }}</td>
                    <td>{{ $pengguna->level_pengguna_di_divisi }}</td>
                    <td>{{ $pengguna->telepon }}</td>
                    <td>{{ $pengguna->handphone }}</td>
                    <td>{{ $pengguna->aktif }}</td>
                    <td>{{ $pengguna->blokir }}</td>
                    <td><a href="pengguna/edit_pengguna/{{ $pengguna->id }}"><i class="fa fa-edit"></a></i>
                      <form action="pengguna/{{ $pengguna->id }}"  method="post">
                        <button type="submit" onclick="return confirm('Kamu Yakin ingin menghapus data ini?')" name="submit"><i class="fa fa-trash"></i></button>
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        </form></td></td>
                    {{-- <td>{{ $pengguna1->created_at->diffForHumans() }}</td> --}}
           
                </tr>
               
            @endforeach
        @endif
        
    </tbody>
    </table>
    {!! $penggunas->appends(request()->except('page'))->render() !!}
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

      