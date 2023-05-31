<?php

namespace Test\TripServiceKata\Trip;

use PHPUnit\Framework\TestCase;
use App\TripServiceKata\Trip\TripService;
use App\TripServiceKata\Trip\TripServiceMock;
use App\TripServiceKata\User\User;

class TripServiceTest extends TestCase
{
    /**
     * @var TripService
     */
    private $tripService;
    private $user;

    protected function setUp() :void
    {
        $this->tripService = new TripServiceMock;
        $this->user = new User('Audrey');
    }

    /** @test */
    public function it_does_something()
    {
        $this->assertEquals($this->tripService->getTripsByUser($this->user), array());
    }
}
