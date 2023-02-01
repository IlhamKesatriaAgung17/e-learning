<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Materi extends Model
{
    use HasFactory;
    protected $table = "materi";
    // protected $primarykey = "id";
    protected $fillable = [
        'nama_materi', 'matkul', 'semester', 'kategori_materi','deskripsi','file',
    ];

    public function detailMateri($id)
    {
        return DB::table('materi')->where('id', $id)->first();
    }
}
