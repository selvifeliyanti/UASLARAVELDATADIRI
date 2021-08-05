<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
    {
        protected $table = 'profil';
        protected $fillable = ['hobby', 'cita_cita', 'visi_misi', 'keterangan'];
    }