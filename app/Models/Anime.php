<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{

    public function animationStudio()
    {

        return $this->belongsTo(AnimationStudio::class);
    }


    public function dubs()
    {

        return $this->belongsToMany(Dub::class);
    }


    public function subs()
    {

        return $this->belongsToMany(Sub::class);
    }


    public function genres()
    {

        return $this->belongsToMany(Genre::class);
    }


    public function type()
    {

        return $this->belongsTo(Type::class);
    }
}
