<?php

final class MasonryController extends AbstractController
{
    public function index() {

        $result = Bricks::findAll();

        $content = loadView(__DIR__ . "/../../app/views/masonry.php", [
            "bricks" => $result
        ]);

        $r = new Response($content);
        $r->setTitle("all bricks");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }

    public function post() {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();

        /** @var Request $request */
        $request = $this->app->get('request');

        $title = $request->post('title');
        $date = $request->post('date');
        $body = $request->post('body');
        $picture = $request->post('picture');

        $stmt = $db->prepare("
                        INSERT INTO bricks (title, date, body, picture) 
                        VALUES (:title, :date, :body, :picture)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':body', $body);
        $stmt->bindParam(':picture', $picture);

        $stmt->execute();

        redirect301("/masonry");
    }
}
