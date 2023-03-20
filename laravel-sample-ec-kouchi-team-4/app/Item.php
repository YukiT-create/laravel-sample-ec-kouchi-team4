<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image',
        'price',
        'stock'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
