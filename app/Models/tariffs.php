<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tariffs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_tariff',
        'cost',
        'config_id'
    ];

    public function configs() {
        return $this->belongsTo(configs::class, 'config_id', 'id');
    }

    public function places() {
        return $this->hasMany(places::class, 'tariff_id', 'id');
    }
}
