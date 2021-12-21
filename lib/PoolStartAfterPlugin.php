<?php

namespace Uccu\SwKoaPlugin\Plugin;

use Swoole\Process\Manager;

interface PoolStartAfterPlugin extends Plugin
{
    function poolStartAfter(Manager $manager);
}
