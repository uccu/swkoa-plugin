<?php

namespace Uccu\SwKoaPlugin;

interface HttpServerStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\HttpServer $httpServer
     */
    public static function httpServerStartBefore($httpServer);
}
