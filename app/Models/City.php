<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'listings', 'country_id'
    ];

    /**
     * Get the country that has the city.
     */
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
