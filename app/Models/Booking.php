<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'booking_time', 'back_time', 'car_id'];

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'booking_clients');
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
