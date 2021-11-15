<?php

declare(strict_types=1);

namespace Framework\ServiceProviders;

abstract class BaseServiceProvider
{
    protected \Framework\Application $app;

    /**
     * @param \Framework\Application $app
     */
    public function __construct(\Framework\Application $app)
    {
        $this->app = $app;
    }
}