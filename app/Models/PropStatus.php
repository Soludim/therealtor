<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropStatus extends Model
{
    use HasFactory;

    protected $table = 'prop_status';
    
    protected $fillable = [
        'name'
    ];

    public function properties() {
        return $this->hasMany('App\Models\Property');
    }
}
