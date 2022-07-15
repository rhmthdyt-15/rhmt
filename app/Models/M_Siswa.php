<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Siswa extends Model
{
    use SoftDeletes;

    protected $table = 'siswa';
    protected $fillable = [
        'nama',
        'nim',
        'alamat',
    ];

    protected $hidden;
}
