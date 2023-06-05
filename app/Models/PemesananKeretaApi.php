<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananKeretaApi extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_kereta';
    protected $primarykey = "id";
    protected $fillable = [
        'id_user',
        'id_tiket_kereta',
        'jumlah_pemesanan',
    ];
    public function RTiketKeretaApi(){
        return $this->belongsTo(TiketKeretaApi::class, 'id_tiket_kereta');
    }
    public function RUser(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
