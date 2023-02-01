<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = "matkul";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama_mk', 'kode_matkul', 'sks','foto',
    ];
}
