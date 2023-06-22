<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function properties() {
        return $this->hasMany('App\Models\Property');
    }
}
