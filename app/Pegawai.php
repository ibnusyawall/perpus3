<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';
    protected $fillable = [
        'id', 'id_pegawai', 'nama',
        'jenis_kelamin', 'no_hp', 'alamat'
    ];
}
