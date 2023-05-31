<?php

namespace App\TripServiceKata\Trip;

use App\TripServiceKata\User\User;

class Trip
{
    private $trips;

    public function __construct()
    {
        $this->trips = array();
    }

    public function getTrips()
    {
        return $this->trips;
    }

    public function addTrip(Trip $trip)
    {
        $this->trips[] = $trip;
    }
}
