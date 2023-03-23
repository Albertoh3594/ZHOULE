<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['route','principal'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
