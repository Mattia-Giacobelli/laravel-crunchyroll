<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dub extends Model
{

    public function animes()
    {

        return $this->belongsToMany(Anime::class);
    }
}
