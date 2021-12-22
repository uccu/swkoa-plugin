<?php

namespace Uccu\SwKoaPlugin;

interface IPoolStartAfterPlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public function poolStartAfter($manager);
}
