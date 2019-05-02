<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    protected $table = 'members';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'age',
        'phone',
        'price',
        'is_sale',
        'created_by',
    ];
}
