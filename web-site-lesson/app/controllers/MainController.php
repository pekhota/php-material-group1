<?php
declare(strict_types=1);
class MainController extends AbstractController
{
    public function index(): Response
    {
        $content = loadView(__DIR__ . "/../../app/views/hero.php", []);
        $r = new Response($content);
        $r->setTitle("Main page");
        return $r;
    }
}