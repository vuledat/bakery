<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InforModel extends Model
{
    protected $table = 'infor_main';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'id',
        'name',
        'content',
        'status',
    ];
}
