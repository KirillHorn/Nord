<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class configs extends Model
{
    use HasFactory;

    protected $fillable = [
        'CPU',
        'RAM',
        'card',
        'monitor',
        'keyboard',
        'mouse',
        'headphones',
    ];


    public function tariffs() {
        return $this->belongsTo(tariffs::class, 'config_id', 'id');
    }
}
