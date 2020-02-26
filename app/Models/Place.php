<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'open', 'close', 'address', 'review_count', 'review_score', 'image'
    ];

    /**
     * Get the city that has the event.
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    /**
     * Get the type that has the event.
     */
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory', 'subcategory_id');
    }
}
