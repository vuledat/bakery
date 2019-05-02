<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SilerModel extends Model
{
    protected $table = 'slider';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'id',
        'img',
        'des_main',
        'des_extra',
    ];

}
