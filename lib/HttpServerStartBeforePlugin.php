<?php

namespace Uccu\SwKoaPlugin\Plugin;

interface HttpServerStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoa\HttpServer $httpServer
     */
    function httpServerStartBefore($httpServer);
}
