<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi2 extends Model
{
    use HasFactory;
    protected $table = "materi2";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama_materi', 'matkul', 'semester', 'kategori_materi','deskripsi','file',
    ];
}
