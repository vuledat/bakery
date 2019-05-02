<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $dates = [
        'created_at',
        'updated_at',
        'date_sale',
    ];

    protected $fillable = [
        'name',
        'img',
        'category_id',
        'price',
        'is_sale',
        'created_by',
    ];

    public function category()
    {
        return $this->belongsTo('App\CategoriesModel','category_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','created_by','id');
    }
}
