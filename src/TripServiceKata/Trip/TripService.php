<?php

namespace App\TripServiceKata\Trip;

use App\TripServiceKata\User\User;
use App\TripServiceKata\User\UserSession;
use App\TripServiceKata\Exception\UserNotLoggedInException;

class TripService
{
    public function getTripsByUser(User $user) {
        $tripList = array();
        $loggedUser = $this->getLoggedUser();
        $isFriend = false;
        if ($loggedUser != null) {
            foreach ($user->getFriends() as $friend) {
                if ($friend == $loggedUser) {
                    $isFriend = true;
                    break;
                }
            }
            if ($isFriend) {
                $tripList = TripDAO::findTripsByUser($user);
            }
            return $tripList;
        } else {
            throw new UserNotLoggedInException();
        }
    }

    public function getLoggedUser() 
    {
        return UserSession::getInstance()->getLoggedUser();
    }
}
