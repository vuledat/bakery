<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{

    protected $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'id',
        'name',
    ];
}
