<?php

namespace App\TripServiceKata\Trip;

use App\TripServiceKata\User\User;
use App\TripServiceKata\Exception\DependentClassCalledDuringUnitTestException;

class TripDAO
{
    public static function findTripsByUser(User $user)
    {
        throw new DependentClassCalledDuringUnitTestException('TripDAO should not be invoked on an unit test.');
    }
}
