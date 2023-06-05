<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $primarykey = "id";
    protected $fillable = [
        'id_kota',
        'tanggal_berangkat',
        'tanggal_pesan',
    ];
    public function RKota(){
        return $this->belongsTo(Kota::class, 'id_kota');
    }
    public function TiketKeretaApi(){
        return $this->hasMany(TiketKeretaApi::class);
    }
    public function TiketPesawat(){
        return $this->hasMany(TiketPesawat::class);
    }
    public function TiketKapal(){
        return $this->hasMany(TiketKapal::class);
    }
}
