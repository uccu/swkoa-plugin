<?php

namespace Uccu\SwKoaPlugin;

interface PoolStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public static function poolStartBefore($manager);
}
