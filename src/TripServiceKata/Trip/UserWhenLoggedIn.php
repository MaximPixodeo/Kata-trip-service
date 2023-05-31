<?php

namespace App\TripServiceKata\Trip;

use App\TripServiceKata\User\User;

class UserWhenLoggedIn extends User
{
    public function getLoggedUser()
    {
        return new User('Maksim');
    }

    public function findTripsByUser($user)
    {
        return array();
    }
}
