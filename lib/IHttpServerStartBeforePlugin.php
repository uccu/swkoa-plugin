<?php

namespace Uccu\SwKoaPlugin;

interface HttpServerStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\HttpServer $httpServer
     */
    public function httpServerStartBefore($httpServer);
}
