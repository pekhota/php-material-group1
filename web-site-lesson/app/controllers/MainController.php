<?php

class MainController extends AbstractController
{
    public function index() {
        $content = loadView(__DIR__ . "/../../app/views/hero.php", []);
        $r = new Response($content);
        $r->setTitle("Main page");
        return $r;
    }
}