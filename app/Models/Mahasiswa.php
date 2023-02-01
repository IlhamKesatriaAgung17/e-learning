<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama', 'nim', 'email', 'semester', 'angkatan', 'no_tlp', 'foto',
    ];
}
