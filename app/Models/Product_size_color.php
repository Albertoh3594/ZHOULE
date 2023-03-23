<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_size_color extends Model
{
    use HasFactory;

    protected $table = 'product_size_colors';

    protected $fillable = ['stock','product_id', 'color_id', 'size_id'];
    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
