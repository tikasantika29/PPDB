<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;
    protected $table = "tb_ortu";
    protected $primaryKey = 'id_ortu';
    public $timestamps = false;
    protected $fillable = [
        'id_ortu',
        'nama_ortu',
        'pekerjaan',
        'nohp_ortu',
        'id_siswa'
    ];

    public function siswa(){
        return $this->belongsTo('App\Models\Siswa')
;    }
}
