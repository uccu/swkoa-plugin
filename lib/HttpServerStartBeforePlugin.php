<?php

namespace Uccu\SwKoaPlugin;

interface HttpServerStartBeforePlugin extends Plugin
{
    /**
     * @param \Uccu\SwKoa\HttpServer $httpServer
     */
    function httpServerStartBefore($httpServer);
}
