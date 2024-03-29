<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = "testimoni";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama', 'role', 'jenis_kelamin','foto', 'pesan',
    ];
}
