<?php

namespace Uccu\SwKoaPlugin;

interface THttpServerHandleBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\Context $ctx
     */
    public static function httpServerHandleBefore($ctx);
}
