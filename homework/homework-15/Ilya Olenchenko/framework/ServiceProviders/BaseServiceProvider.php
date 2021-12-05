<?php

abstract class BaseServiceProvider
{
    protected Application $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}