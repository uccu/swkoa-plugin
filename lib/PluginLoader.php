<?php

namespace Uccu\SwKoaPlugin;

class PluginLoader
{

    private $names = [];
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

    public function add($class, $name = null)
    {

        if (is_null($name)) {
            if (is_string($class)) {
                $name = $class;
            } else {
                $name = get_class($class);
            }
        }

        if (!in_array($class, $this->names)) {
            array_push($this->names, $name);
            $this->plugins[$name] = $class;
        }

    }

    public function get($class)
    {
        return $this->instances[$class] ?? null;
    }


    public function __call($name, $args)
    {
        foreach ($this->plugins as $plugin) {
            if (method_exists($plugin, $name)) {
                call_user_func([$plugin, $name], ...$args);
            }
        }
    }
}
