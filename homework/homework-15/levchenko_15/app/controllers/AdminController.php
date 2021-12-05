<?php
declare(strict_types=1);
final class AdminController extends AbstractController
{
    public function index():Response {

        $result = News::findAll();

        $content = loadView(__DIR__ . "/../../app/views/admin.php", [
            "news" => $result
        ]);

        $r = new Response($content);
        $r->setTitle("all news for admin");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }

    public function get($id):Response {
        /** @var User $model */
        $model = User::findByPk($id);

        $content = loadView(__DIR__."/../../app/views/admin.php", [
            'User' => $model
        ]);
        $r = new Response($content);
        $r->setTitle("admin");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");

        return $r;
    }

    public function post($id):Response {
        /** @var News $model */
        $model = News::findByPk($id);

        $content = loadView(__DIR__."/../../app/views/read.php", [
            'news' => $model
        ]);
        $r = new Response($content);
        $r->setTitle("read");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");

        return $r;
    }
}