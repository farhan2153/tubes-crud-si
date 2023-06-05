<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketPesawat extends Model
{
    use HasFactory;
    protected $table = 'tiket_pesawat';
    protected $primarykey = "id";
    protected $fillable = [
        'id_maskapai',
        'id_jadwal',
        'harga',
        'kelas',
    ];
    public function RMaskapai(){
        return $this->belongsTo(Maskapai::class, 'id_maskapai');
    }
    public function RJadwal(){
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
    public function PemesananPesawat(){
        return $this->hasMany(PemesananPesawat::class);
    }
}
