<?php

final class BrickController extends AbstractController
{
    public function index() {

        $result = Bricks::findAll();

        $content = loadView(__DIR__ . "/../../app/views/brick.php", [
            "bricks" => $result
        ]);

        $r = new Response($content);
        $r->setTitle("all bricks");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }

    public function get($id) {
        /** @var User $model */
        $model = User::findByPk($id);

        $content = loadView(__DIR__."/../../app/views/brick.php", [
            'User' => $model
        ]);
        $r = new Response($content);
        $r->setTitle("brick");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }
}