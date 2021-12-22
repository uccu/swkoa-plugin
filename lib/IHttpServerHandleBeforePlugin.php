<?php

namespace Uccu\SwKoaPlugin;

interface IHttpServerHandleBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\Context $ctx
     */
    public function httpServerHandleBefore($ctx);
}
