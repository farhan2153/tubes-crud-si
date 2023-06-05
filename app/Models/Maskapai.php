<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maskapai extends Model
{
    use HasFactory;
    protected $table = 'maskapai';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_pesawat',
        'id_pegawai',
    ];
    public function RPegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
    public function TiketPesawat(){
        return $this->hasMany(TiketPesawat::class);
    }
}
