<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image'
    ];

    /**
     * Get the city that has the event.
     */
    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
}
