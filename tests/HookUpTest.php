<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\React;

use Rx\Scheduler;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

final class HookUpTest extends AsyncTestCase
{
    /** @test */
    public function asyncAndDefaultAreTheSame(): void
    {
        self::assertTrue(Scheduler::getAsync() === Scheduler::getDefault());
    }

    /** @test */
    public function getAsyncReturnsEventLoopScheduler(): void
    {
        self::assertInstanceOf(Scheduler\EventLoopScheduler::class, Scheduler::getAsync());
    }

    /** @test */
    public function getDefaultReturnsEventLoopScheduler(): void
    {
        self::assertInstanceOf(Scheduler\EventLoopScheduler::class, Scheduler::getDefault());
    }
}
