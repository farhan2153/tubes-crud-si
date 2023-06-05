<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananPesawat extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_pesawat';
    protected $primarykey = "id";
    protected $fillable = [
        'id_user',
        'id_tiket_pesawat',
        'jumlah_pemesanan',
    ];
    public function RTiketPesawat(){
        return $this->belongsTo(TiketPesawat::class, 'id_tiket_pesawat');
    }
    public function RUser(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
