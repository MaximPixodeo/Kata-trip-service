<?php

namespace App\TripServiceKata\User;

use App\TripServiceKata\Trip\Trip;
use App\TripServiceKata\Trip\TripDAO;

class User
{
    private $friends;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->friends = array();
    }

    public function getFriends()
    {
        return $this->friends;
    }

    public function addFriend(User $user)
    {
        $this->friends[] = $user;
    }


    public function getLoggedUser()
    {
        return UserSession::getInstance()->getLoggedUser();
    }

    public function findTripsByUser(User $user)
    {
        return TripDAO::findTripsByUser($user);
    }
}
