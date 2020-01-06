<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $incrementing = false;
    protected $table = 'pegawai';
    protected $primaryKey = 'username';
    protected $fillable = [
        'username',
        'password',
        'nama_pegawai',
        'jk',
        'alamat',
        'is_aktif'
    ];

    protected $keyType = 'string';
}
