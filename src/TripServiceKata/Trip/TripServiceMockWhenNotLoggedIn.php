<?php

namespace App\TripServiceKata\Trip;

use App\TripServiceKata\User\User;
use App\TripServiceKata\User\UserSession;
use App\TripServiceKata\Trip\TripService;
use App\TripServiceKata\Exception\UserNotLoggedInException;

class TripServiceMockWhenNotLoggedIn extends TripService
{
    public function getLoggedUser()
    {
        return null;
    }
}
