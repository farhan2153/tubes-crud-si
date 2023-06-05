<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $primarykey = "id";
    protected $fillable = [
        'nama_kota_asal',
        'nama_kota_tujuan',
    ];
    public function Jadwal(){
        return $this->hasMany(Jadwal::class);
    }
    public function TiketKeretaApi(){
        return $this->hasMany(TiketKeretaApi::class);
    }
}
