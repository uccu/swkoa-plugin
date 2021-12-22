<?php

namespace Uccu\SwKoaPlugin;

interface IHttpServerStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoaHttp\HttpServer $httpServer
     */
    public function httpServerStartBefore($httpServer);
}
