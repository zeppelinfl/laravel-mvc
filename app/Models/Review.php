<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message'
    ];

    /**
     * Get the country that has the city.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
