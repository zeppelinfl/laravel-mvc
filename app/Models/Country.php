<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the city that has the country.
     */
    public function city()
    {
        return $this->hasMany('App\Models\City', 'country_id', 'id');
    }
}
