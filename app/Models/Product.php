<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $filleable = ['nombre', 'descripcion', 'categoria', 'detalles', 'precio', 'visible'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'Order_line');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'Comment');
    }

    //Relacion Ternaria con Color y Talla

    public function colors()
    {
        return $this->belongsToMany("Color");
    }

    public function sizes()
    {
        return $this->belongsToMany("Size");
    }


}
