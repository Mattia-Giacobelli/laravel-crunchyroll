<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    public function animes()
    {

        return $this->belongsToMany(Anime::class);
    }
}
