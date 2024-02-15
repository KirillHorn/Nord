<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_place',
        'tariff_id',
        'status'
    ];

    public function status_place() {
        return $this->belongsTo(statusplases::class, 'status' , 'id');
    }
    public function tariff() {
        return $this->belongsTo(tariffs::class, 'tariff_id', 'id');
    }
    public function bookings_id() {
        return $this->hasOne(bookings::class, 'place_id');
    }

}
