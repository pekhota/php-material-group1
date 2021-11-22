<?php

declare(strict_types=1);

namespace App\Controllers;
use Framework\Application;

abstract class AbstractController
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