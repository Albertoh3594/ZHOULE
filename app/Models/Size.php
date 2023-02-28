<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    public function colors()
    {
        return $this->belongsToMany("Color");
    }

    // Esta relacion es opcional
    public function products()
    {
    return $this->belongsToMany("Product", 'Product_size_color');
    }
}
