<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\BookingClient;
use App\Models\User;
use http\Env\Response;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BookingController extends Controller
{
public function booking(BookingRequest $request) {

    $bookingData = [
      'code' => Str::upper(Str::random(5)),
        "booking_time" => $request->booking_time['date'],
        "back_time" => $request->back_time['date'],
        "car_id" =>$request->car['id']

    ];
    $booking = Booking::create($bookingData);
    $client = Client::create($request->clients);
    $booking->clients()->save($client);
    return response()->json([
       'data' => [
           'code' => $booking->code
       ]
    ]);
//    return $booking->pivot->client_id;
    }


    public function show(Booking $booking)
    {
        return response()->json([
            'data' => [
                'code' => $booking->code,
                'booking_time' => ['date'=> $booking->booking_time],
                'back_time' => ['date' => $booking->back_time],
                'client' => DB::table('clients')->where('id', $booking->id)->first(),
                'bookings' => $booking,
            ]
        ]);

    }
}
