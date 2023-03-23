<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
class Team extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['date_time_training','date_time_competition'];


    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
