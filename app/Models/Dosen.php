<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = "dosen";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama', 'kode_dosen', 'email', 'no_tlp', 'foto',
    ];
}
