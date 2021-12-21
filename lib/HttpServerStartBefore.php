<?php

namespace Uccu\SwKoaPlugin\Plugin;

interface HttpServerStartBefore extends Plugin
{
    /**
     * @param \Uccu\SwKoa\HttpServer $httpServer
     */
    function httpServerStartBefore($httpServer);
}
