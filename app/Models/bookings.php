<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_id',
        'beginning_time',
        'end_time',
        'status_id',
        'user_id',
    ];
}
