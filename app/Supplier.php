<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier";
    protected $primaryKey = "kd_supplier";
    protected $fillable = [
        'nama_supplier',
        'alamat_supplier'
    ];
}
