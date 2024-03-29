<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['name','description', 'type'];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
