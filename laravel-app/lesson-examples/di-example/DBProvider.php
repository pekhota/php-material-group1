<?php

class Application {
    private $container = [
        'DatabaseMysqlAdapter::class' => 'new DatabaseMysqlAdapter()'
    ];
}

class DBProvider
{
    public function register() {
        // инициализация
        app()->singleton(DBInterface::class, DatabasePostgresqlAdapter::class);
    }
}

class MainController {
    public function index() {
        //        /** @var DBInterface $db */
        /** @var DatabasePostgresqlAdapter $db */
        $db = app(DBCanCreate::class);
        $db->create();
//        $db->create();
//        $db->create();
//        $db->create();
//        $db->create();
//        $db->create();
    }
}
