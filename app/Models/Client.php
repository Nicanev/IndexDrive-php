<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $with = ['booking'];



    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'phone',
        'birth_date',
        'passport_series',
        'passport_number',
        ];


    public function booking()
    {
        return $this->belongsToMany(Booking::class, 'booking_clients');
    }


}
