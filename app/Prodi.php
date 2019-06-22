<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Prodi extends Model
{
    use Sortable;
    protected $fillable = [
        'jenjang_studi', 'fakultas','akreditasi',
        'program_studi', 'ketua_program_studi',
    ];
    public $sortable = 
    ['id','jenjang_studi',
    'fakultas','akreditasi',
    'program_studi','ketua_program_studi'];
}
