<?php

namespace App\TripServiceKata\Trip;

use App\TripServiceKata\User\User;
use App\TripServiceKata\User\UserSession;
use App\TripServiceKata\Exception\UserNotLoggedInException;

class TripService
{
    public function getTripsByUser(User $user) {
        $loggedUser = $user->getLoggedUser();

        if ($loggedUser == null) {
            throw new UserNotLoggedInException();
        }
        
        $tripList = array();
        $isFriend = false;
       
        foreach ($user->getFriends() as $friend) {
            if ($friend == $loggedUser) {
                $isFriend = true;
                break;
            }
        }

        if ($isFriend) {
            $tripList = $user->findTripsByUser($user);
        }
        return $tripList;
    
    }
}
