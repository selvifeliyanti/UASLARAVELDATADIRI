<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
    {
        protected $table = 'pengalaman';
        protected $fillable = ['nama_lengkap', 'ttl', 'tetang_saya'];
    }