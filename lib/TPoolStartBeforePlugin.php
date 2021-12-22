<?php

namespace Uccu\SwKoaPlugin;

interface TPoolStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public static function poolStartBefore($manager);
}
