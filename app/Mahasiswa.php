<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
 protected $table = 'mahasiswa';

 protected $fillable = [
    'nim', 'nama', 'gender', 'jurusan', 'bidang_minat'
    ];
}
