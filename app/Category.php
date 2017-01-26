<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The events associated with the category.
     */
    public function events()
    {
        return $this->belongsToMany('App\Event');
    }
}
