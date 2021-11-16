<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testInit() {
        // проверить без service providers
        // для того что бы проверить providers
        // 1. подставить и розпарсить конфиги
        // 2. поднять настоящий сервер бд
        $app = $this->getMockBuilder(\Framework\Application::class)
            ->disableOriginalConstructor()
            ->getMock();

        $a = $app->getContainer();
        $this->assertIsArray($a);
        $this->assertEmpty($app->getContainer());
    }
}