<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function timeslots()
    {
        return $this->hasMany(Timeslot::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
