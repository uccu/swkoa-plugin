<?php

namespace Uccu\SwKoaPlugin;

interface PoolStartAfterPlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public function poolStartAfter($manager);
}
