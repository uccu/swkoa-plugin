<?php

namespace Uccu\SwKoaPlugin\Plugin;

use Swoole\Process\Manager;

interface PoolStartBeforePlugin extends Plugin
{
    function poolStartBefore(Manager $manager);
}
