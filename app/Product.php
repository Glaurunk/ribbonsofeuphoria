<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    protected $casts = [
        'images' => 'array',
        'sizes' => 'array',
        'dimensions' => 'array'
    ];

    public function orders() {
        return $this->belongsToMany(Order::class);
    }

    public function category() {
        return $this->belongsTo(ProductCategory::class);
    }

    public function sizes() {
        return $this->belongsToMany(Size::class);
    }

    public function dimensions() {
        return $this->belongsToMany(Dimension::class);
    }
}
