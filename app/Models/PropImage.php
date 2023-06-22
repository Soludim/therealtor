<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'property_id'
    ];

    public function property() {
        return $this->belongsTo('App\Models\Properties');
    }
}
