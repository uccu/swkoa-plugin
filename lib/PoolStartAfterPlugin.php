<?php

namespace Uccu\SwKoaPlugin;

use Swoole\Process\Manager;

interface PoolStartAfterPlugin extends Plugin
{
    function poolStartAfter(Manager $manager);
}
