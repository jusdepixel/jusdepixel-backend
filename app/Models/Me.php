<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'picture',
        'description',
        'job',
        'baseline',
    ];
}
