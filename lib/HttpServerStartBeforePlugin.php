<?php

namespace Uccu\SwKoaPlugin;

interface HttpServerStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\HttpServer $httpServer
     */
    function httpServerStartBefore($httpServer);
}
