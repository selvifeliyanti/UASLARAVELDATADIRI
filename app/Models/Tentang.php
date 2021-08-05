<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tentang';
    protected $fillable = ['nama_Admin', 'alamat','no_telp','email'];
}