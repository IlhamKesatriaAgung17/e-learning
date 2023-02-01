<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi3 extends Model
{
    use HasFactory;
    protected $table = "materi3";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama_materi', 'matkul', 'semester', 'kategori_materi','deskripsi','file',
    ];
}
