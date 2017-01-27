<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start',
        'end',
        'points',
    ];

    /**
     * The categories associated with the event.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
