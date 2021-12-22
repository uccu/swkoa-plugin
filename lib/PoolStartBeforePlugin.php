<?php

namespace Uccu\SwKoaPlugin;

use Swoole\Process\Manager;

interface PoolStartBeforePlugin extends Plugin
{
    function poolStartBefore(Manager $manager);
}
