<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    protected $table = 'to_dos';

    protected $fillable = [
        'Tugas',
        'deskripsi',
        'tanggal_selesai',
        'selesai',
    ];
}
