<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'data', 'time', 'address', 'review_count', 'image'
    ];

    /**
     * Get the city that has the event.
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    /**
     * Get the type that has the event.
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
