<?php

namespace Uccu\SwKoaPlugin\Plugin;

interface HttpServerHandleBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoa\Context $ctx
     */
    function httpServerHandleBefore($ctx);
}
