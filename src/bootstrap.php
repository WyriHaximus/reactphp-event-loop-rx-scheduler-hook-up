<?php

declare(strict_types=1);

use React\EventLoop\Loop;
use Rx\AsyncSchedulerInterface;
use Rx\Scheduler;

(static function (): void {
    $scheduler = new Scheduler\EventLoopScheduler(Loop::get());
    $factory   = static fn (): AsyncSchedulerInterface => $scheduler;
    Scheduler::setDefaultFactory($factory);
    Scheduler::setAsyncFactory($factory);
})();
