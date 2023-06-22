<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'take_tour_video',
        'status_id',
        'bedrooms',
        'bathrooms',
        'type_id',
        'price',
    
    ];

    public function images() {
        return $this->hasMany('App\Models\PropImage');
    }

    public function status() {
        return $this->belongsTo('App\Models\PropStatus', 'status_id');
    }

    public function type() {
        return $this->belongsTo('App\Models\PropType', 'type_id');
    }

}
