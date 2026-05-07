<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\React;

use PHPUnit\Framework\Attributes\Test;
use Rx\Scheduler;
use WyriHaximus\AsyncTestUtilities\AsyncTestCase;

final class HookUpTest extends AsyncTestCase
{
    #[Test]
    public function asyncAndDefaultAreTheSame(): void
    {
        self::assertTrue(Scheduler::getAsync() === Scheduler::getDefault());
    }

    #[Test]
    public function getAsyncReturnsEventLoopScheduler(): void
    {
        self::assertInstanceOf(Scheduler\EventLoopScheduler::class, Scheduler::getAsync());
    }

    #[Test]
    public function getDefaultReturnsEventLoopScheduler(): void
    {
        self::assertInstanceOf(Scheduler\EventLoopScheduler::class, Scheduler::getDefault());
    }
}
