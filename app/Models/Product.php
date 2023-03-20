<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $filleable = ['nombre', 'descripcion', 'categoria', 'detalles', 'precio', 'visible'];


    /*Funcion para definir la relacion y asi obtener solo la imagen principal del Producto en cuestión */
    public function imagenPrincipal()
    {
        return $this->hasOne(Image::class)->where('principal', 1);
    }
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

    public function productSizeColors()
    {
        return $this->hasMany(Product_size_color::class);
    }

    /*Funcion para devuelva los colores únicos del producto y el color que se seleccionó previamente*/
    public function getUniqueColors($selectedColor = null)
    {
        $uniqueColors = $this->productSizeColors->unique('color_id')->pluck('color');

        $data = [];

        foreach ($uniqueColors as $color) {
            $data[] = [
                'id' => $color->id,
                'nombre' => $color->nombre,
                'selected' => ($selectedColor == $color->id) ? true : false,
            ];
        }

        return $data;
    }

    /*Funcion para devuelva las tallas Unicas del producto y la talla que se seleccionó previamente*/
    public function getUniqueSizes($selectedSize = null)
    {
        $uniqueSizes = $this->productSizeColors->unique('size_id')->pluck('size');

        $data = [];

        foreach ($uniqueSizes as $size) {
            $data[] = [
                'id' => $size->id,
                'nombre' => $size->nombre,
                'selected' => ($selectedSize == $size->id) ? true : false,
            ];
        }

        return $data;
    }

    public function colorsAndSizes()
    {
        return $this->belongsToMany(Color::class)->withPivot('size_id')->withPivot('product_id');
    }



}
