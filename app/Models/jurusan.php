<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

    protected $guarded = [];

// relasi ke siswa
    // public function Siswa()
    // {
    //     return $this->belongsTo(Siswa::class);
    // }
}
