<?php
declare(strict_types=1);

class Config
{
    private array $data;

    public static $configPath = __DIR__."/../config";

    /**
     * @param array $configs
     */
    public function __construct(array $configs)
    {
        $this->data = $configs;
    }

    /**
     * $path = "telegram.token"
     * @param string $path
     * @return mixed
     */
    public function get(string $path, $default = null) {
        return Arr::wrap($this->data)->get($path, $default);
    }
}
