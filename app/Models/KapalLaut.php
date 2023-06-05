<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KapalLaut extends Model
{
    use HasFactory;
    protected $table = 'kapal_laut';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_kapal',
        'id_pegawai',
    ];
    public function RPegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');

    }
}
