<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'kd_kategori';
    protected $fillable = [
        'kategori',
        'gambar_kategori'
    ];
}
