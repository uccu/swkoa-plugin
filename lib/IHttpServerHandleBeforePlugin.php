<?php

namespace Uccu\SwKoaPlugin;

interface HttpServerHandleBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\Context $ctx
     */
    public function httpServerHandleBefore($ctx);
}
