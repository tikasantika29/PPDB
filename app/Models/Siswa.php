<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    protected $table = "siswa";
    protected $primaryKey = 'id_siswa';
    public $timestamps = false;
    protected $fillable = [
        'id_siswa',
        'nama',
        'nik',
        'nisn',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'id_ortu'
    ];

    public function ortu(){
        return $this->hasOne('App\Models\Ortu', 'id_siswa');
    }
}
