<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketKeretaApi extends Model
{
    use HasFactory;
    protected $table = 'tiket_kereta';
    protected $primarykey = "id";
    protected $fillable = [
        'id_kereta',
        'id_jadwal',
        'harga',
        'kelas',
    ];
    public function RKereta(){
        return $this->belongsTo(Kereta::class, 'id_kereta');
    }
    public function RJadwal(){
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
    public function PemesananKeretaApi(){
        return $this->hasMany(PemesananKeretaApi::class);
    }
}
