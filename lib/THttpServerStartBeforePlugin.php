<?php

namespace Uccu\SwKoaPlugin;

interface THttpServerStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\HttpServer $httpServer
     */
    public static function httpServerStartBefore($httpServer);
}
