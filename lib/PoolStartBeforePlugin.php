<?php

namespace Uccu\SwKoaPlugin;

interface PoolStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    function poolStartBefore($manager);
}
