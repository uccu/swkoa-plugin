<?php

namespace Uccu\SwKoaPlugin;

class PluginLoader
{

    private $plugins = [];
    private $instances = [];

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

    public function add($class)
    {
        if (!in_array($class, $this->plugins)) {
            array_push($this->plugins, $class);
            $this->instances[$class] = new $class($this);
        }
    }

    public function get($class)
    {
        return $this->instances[$class] ?? null;
    }

    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public function poolStartBefore($manager)
    {
        foreach ($this->plugins as $pluginClass) {
            $plugin = $this->instances[$pluginClass];
            if ($plugin instanceof PoolStartBeforePlugin) {
                $plugin->poolStartBefore($manager);
            }
        }
    }

    /**
     * @param \Uccu\SwKoaServer\PoolManager $manager
     */
    public function poolStartAfter($manager)
    {
        foreach ($this->plugins as $pluginClass) {
            $plugin = $this->instances[$pluginClass];
            if ($plugin instanceof PoolStartAfterPlugin) {
                $plugin->poolStartAfter($manager);
            }
        }
    }

    /**
     * @param \Uccu\SwKoaHttp\HttpServer $httpServer
     */
    public function httpServerStartBefore($httpServer)
    {
        foreach ($this->plugins as $pluginClass) {
            $plugin = $this->instances[$pluginClass];
            if ($plugin instanceof HttpServerStartBeforePlugin) {
                $plugin->httpServerStartBefore($httpServer);
            }
        }
    }

    /**
     * @param \Uccu\SwKoaHttp\Context $ctx
     */
    public function httpServerHandleBefore($ctx)
    {
        foreach ($this->plugins as $pluginClass) {
            $plugin = $this->instances[$pluginClass];
            if ($plugin instanceof HttpServerHandleBeforePlugin) {
                $plugin->httpServerHandleBefore($ctx);
            }
        }
    }
}
