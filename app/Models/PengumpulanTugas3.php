<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengumpulanTugas3 extends Model
{
    use HasFactory;
    protected $table = "pengumpulan_tugas3";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama_mhs', 'matkul', 'semester', 'file'
    ];
}
