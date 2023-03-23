<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'job',
        'society',
        'dates',
        'skills',
        'location',
        'duration',
        'icon',
        'css',
    ];
}
