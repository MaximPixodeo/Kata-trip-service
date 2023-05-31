<?php

namespace Test\TripServiceKata\Trip;

use PHPUnit\Framework\TestCase;
use App\TripServiceKata\Trip\TripService;
use App\TripServiceKata\Trip\TripServiceMock;
use App\TripServiceKata\Trip\TripServiceMockWhenLoggedIn;
use App\TripServiceKata\Trip\TripServiceMockWhenNotLoggedIn;
use App\TripServiceKata\User\User;
use App\TripServiceKata\Exception\UserNotLoggedInException;
use Exception;

class TripServiceTest extends TestCase
{
    /**
     * @var TripService
     */
    private $tripServiceMockWhenLoggedin;
    private $tripServiceMockWhenNotLoggedin;
    private $user;

    protected function setUp() :void
    {
        $this->tripServiceMockWhenLoggedin = new TripServiceMockWhenLoggedIn;
        $this->tripServiceMockWhenNotLoggedin = new TripServiceMockWhenNotLoggedIn;
        $this->user = new User('Audrey');
    }

    /** @test */
    public function test_get_trips_by_user_return_array_when_logged_in()
    {
        $this->user->addFriend(new User('Maksim'));

        $this->assertEquals($this->tripServiceMockWhenLoggedin->getTripsByUser($this->user), array());
        
    }

    public function test_get_trips_by_user_throw_exception_when_not_logged_in()
    {
        $this->expectException(UserNotLoggedInException::class);

        $this->tripServiceMockWhenNotLoggedin->getTripsByUser($this->user);
    }
}
