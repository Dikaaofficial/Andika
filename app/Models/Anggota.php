<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'no_hp',
        'jenis_kelamin',
        'alasan'
    ];
}