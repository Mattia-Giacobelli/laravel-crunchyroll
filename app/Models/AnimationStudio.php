<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimationStudio extends Model
{

    public function animes()
    {

        return $this->hasMany(Anime::class);
    }
}
