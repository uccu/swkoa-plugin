<?php

namespace Uccu\SwKoaPlugin\Plugin;

use Swoole\Process\Manager;
use Uccu\SwKoa\HttpServer;
use Uccu\SwKoa\PoolManager;

class PluginLoader
{

    private $plugins = [];

    public function load()
    {
        $path =  getcwd() . '/Plugins.php';
        if (file_exists($path)) {
            $plugins = require($path);
            foreach ($plugins as $p) {
                $this->add($p);
            }
        }
    }

    public function add(Plugin $p)
    {
        array_push($this->plugins, new $p($this));
    }


    public function poolStartBefore(Manager $manager)
    {
        foreach ($this->plugins as $plugin) {
            if ($plugin instanceof PoolStartBeforePlugin) {
                $plugin->poolStartBefore($manager);
            }
        }
    }
    public function poolStartAfter(Manager $manager)
    {
        foreach ($this->plugins as $plugin) {
            if ($plugin instanceof PoolStartAfterPlugin) {
                $plugin->poolStartAfter($manager);
            }
        }
    }
    public function httpServerStartBefore($httpServer)
    {
        foreach ($this->plugins as $plugin) {
            if ($plugin instanceof HttpServerStartBefore) {
                $plugin->httpServerStartBefore($httpServer);
            }
        }
    }
}
