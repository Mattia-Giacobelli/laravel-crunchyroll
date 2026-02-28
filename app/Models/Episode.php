<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    protected $fillable = [
        'anime_id',
        'number',
        'title',
        'plot',
        'cover',
        'duration'
    ];


    public function anime()
    {

        return $this->belongsTo(Anime::class);
    }
}
