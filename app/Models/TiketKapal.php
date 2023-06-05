<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketKapal extends Model
{
    use HasFactory;
    protected $table = 'tiket_kapal';
    protected $primarykey = "id";
    protected $fillable = [
        'id_kapal',
        'id_jadwal',
        'harga',
        'kelas',
    ];
    public function RKapalLaut(){
        return $this->belongsTo(KapalLaut::class, 'id_kapal');
    }
    public function RJadwal(){
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
