<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
    protected $fillable = [
        'id', 'kode_buku', 'judul',
        'pengarang', 'penerbit', 'tahun',
        'jumlah'
    ];
}
