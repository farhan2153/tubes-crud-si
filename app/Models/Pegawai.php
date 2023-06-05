<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primarykey = "id";
    protected $fillable = [
        // 'id_user',
        'nama_pegawai',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
        'notelp',
        'jabatan',
        'tanggal_masuk',
    ];
    public function Kereta(){
        return $this->hasMany(Kereta::class);
    }
    public function Maskapai(){
        return $this->hasMany(Maskapai::class);
    }
    public function KapalLaut(){
        return $this->hasMany(KapalLaut::class);
    }
        
    

}
