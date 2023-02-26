<?php

declare(strict_types=1);

use React\EventLoop\Loop;
use Rx\AsyncSchedulerInterface;
use Rx\Scheduler;

(static function (): void {
    $factory = static fn (): AsyncSchedulerInterface => new Scheduler\EventLoopScheduler(Loop::get());
    Scheduler::setDefaultFactory($factory);
    Scheduler::setAsyncFactory($factory);
})();
