<?php

namespace Uccu\SwKoaPlugin;

interface PoolStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public function poolStartBefore($manager);
}
