<?php

namespace Uccu\SwKoaPlugin;

interface HttpServerHandleBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoa\Context $ctx
     */
    function httpServerHandleBefore($ctx);
}
