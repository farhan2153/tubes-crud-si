<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;
    protected $table = 'kereta_api';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_kereta',
        'id_pegawai',
    ];
    public function RPegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function TiketKeretaApi(){
        return $this->hasMany(TiketKeretaApi::class);
    }
}
