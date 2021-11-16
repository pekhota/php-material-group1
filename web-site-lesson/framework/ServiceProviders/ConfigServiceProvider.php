<?php

declare(strict_types=1);

namespace Framework\ServiceProviders;
use Framework\Config;

class ConfigServiceProvider extends BaseServiceProvider implements ServiceProviderInterface
{
    public const NAME = "config";
    public function register()
    {
        $path = \Framework\Config::$configPath;
        $files = array_diff(scandir($path), ['.', '..']);

        $configArr = [];

        foreach ($files as $file) {
            $key = basename($file, ".php");
//            $key = rtrim($file, ".php");
            $configArr[$key] = require_once $path."/".$file;
        }

        $config = new Config($configArr);
        $this->app->add(self::NAME, $config);
    }
}