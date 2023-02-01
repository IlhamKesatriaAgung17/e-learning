<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = "tugas";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama_tugas', 'matkul', 'semester', 'deskripsi', 'file', 'tgl_mulai', 'tgl_selesai'
    ];
}
