<?php

namespace Tests\Feature;

use App\Singleton;
use Tests\TestCase;

class SingletonTest extends TestCase
{
    /** @test */
    public function it_cannot_re_instantiate()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
