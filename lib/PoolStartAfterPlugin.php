<?php

namespace Uccu\SwKoaPlugin;

interface PoolStartAfterPlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    function poolStartAfter($manager);
}
