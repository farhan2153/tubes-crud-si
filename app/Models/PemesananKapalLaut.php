<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananKapalLaut extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_kapal';
    protected $primarykey = "id";
    protected $fillable = [
        'id_user',
        'id_tiket_kapal',
        'jumlah_pemesanan',
    ];
    public function RTiketKapalLaut(){
        return $this->belongsTo(TiketKapal::class, 'id_tiket_kapal');
    }
    public function RUser(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
