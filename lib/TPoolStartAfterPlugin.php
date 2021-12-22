<?php

namespace Uccu\SwKoaPlugin;

interface TPoolStartAfterPlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public static function poolStartAfter($manager);
}
