<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusplases extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function places() {
        return $this->hasMany(places::class, 'status', 'id');
    }
}
