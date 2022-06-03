<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Reservation extends Model
{
    use HasFactory,Sluggable;
    
    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
    public function timeslot()
    {
        return $this->belongsTo(Timeslot::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['seat_id','timeslot_id']
            ]
        ];
    }
}
