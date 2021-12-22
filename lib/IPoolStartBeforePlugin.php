<?php

namespace Uccu\SwKoaPlugin;

interface IPoolStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public function poolStartBefore($manager);
}
