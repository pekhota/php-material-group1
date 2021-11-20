<?php

final class LogoutController extends AbstractController
{
    public function index() {

        $content = loadView(__DIR__ . "/../../app/views/view.php",[]);

        $r = new Response($content);
        $r->setTitle("logout");
        $r->setLayoutPath(__DIR__."/../../layouts/login.php");
        return $r;
    }
}