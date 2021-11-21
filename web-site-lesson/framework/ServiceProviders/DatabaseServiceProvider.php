<?php
declare(strict_types=1);
class DatabaseServiceProvider extends BaseServiceProvider implements ServiceProviderInterface
{
    public const NAME = "db";

    public function register()
    {
        /** @var Config $config */
        $config = $this->app->get('config');

        $database = $config->get('database');

        $host = $database["host"];
        $db = $database["dbname"];
        $login = $database["login"];
        $pass = $database["password"];

        $dbh = new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $db), $login, $pass);
        $db = new Database($dbh);
        $this->app->add(self::NAME, $db);
    }
}