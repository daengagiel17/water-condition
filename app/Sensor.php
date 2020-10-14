<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensor';

    protected $fillable = [
        'date', 'jarak', 'ph', 'warna', 'selenoidA', 'selenoidB'
    ];
}
