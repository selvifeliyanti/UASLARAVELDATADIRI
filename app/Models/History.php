<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
    {
        protected $table = 'history';
        protected $fillable = ['asal_sd', 'asal_smp', 'asal_smk', 'asal_univ'];
    }