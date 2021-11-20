<?php
declare(strict_types=1);
final class ReadController extends AbstractController
{
    public function index() {

        $result = News::findAll();

        $content = loadView(__DIR__ . "/../../app/views/admin.php", [
            "news" => $result
        ]);

        $r = new Response($content);
        $r->setTitle("all news");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }
    public function get($id) {

        /** @var News $model */
        $model = News::findByPk($id);

        $content = loadView(__DIR__."/../../app/views/read.php", [
            'news' => $model
        ]);

        $r = new Response($content);
        $r->setTitle("read news");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }
}