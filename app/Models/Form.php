<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'telp',
        'email',
        'gender',
        'agama',
        'prodi',
        'tgl_lahir',
    ];
}
