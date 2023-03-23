<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_size_color')
                    ->withPivot('size_id')
                    ->withTimestamps();
    }


}
