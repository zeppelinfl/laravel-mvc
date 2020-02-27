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
     * Get the city that has the place.
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    /**
     * Get the subcategory that the place has.
     */
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory', 'subcategory_id');
    }

    /**
     * Format place time.
     */
    public function formatTime($data)
    {
        $currentTime = date('H:i');
        foreach ($data as $key => $value) {
            if($currentTime < $value->open) {
                $data[$key]['time'] = 'Opens at '.$value->open;
            } elseif($currentTime > $value->close) {
                $data[$key]['time'] = 'Opens at '.$value->open;
            } elseif($currentTime > $value->open && $currentTime < $value->close) {
                $data[$key]['time'] = 'Open untill '.$value->close;
            } else {
                $data[$key]['time'] = 'Closed';
            }
        }
        return $data;
    }
}
