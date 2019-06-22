<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pengguna extends Model
{
    use Sortable;
    protected $fillable = [
        'nip', 'nama_lengkap', 'nama_panggilan','alamat',
        'jenis_kelamin', 'email', 'level_divisi_pengguna','level_pengguna_di_divisi',
        'telepon', 'handphone', 'aktif','blokir',
    ];
    public $sortable = 
    ['id','nip','nama_lengkap',
    'nama_panggilan','alamat',
    'jenis_kelamin','email',
    'level_divisi_pengguna','level_pengguna_di_divisi',
    'telepon','handphone',
    'aktif','aktif'];
}
