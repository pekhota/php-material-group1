<?php

final class NewsController extends AbstractController
{
    public function index() {

        $result = News::findAll();

        $content = loadView(__DIR__ . "/../../app/views/news.php", [
            "news" => $result
        ]);

        $r = new Response($content);
        $r->setTitle("all news");
        return $r;
    }

    public function get($id) {

        /** @var News $model */
        $model = News::findByPk($id);

        //------------------------------------------------------------------
        $content = loadView(__DIR__."/../views/view.php", [
            'news' => $model
        ]);
        //------------------------------------------------------------------
        $r = new Response($content);
        $r->setTitle("some good title");
        return $r;
    }


    public function post() {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();

        /** @var Request $request */
        $request = $this->app->get('request');

        // validation block
        $title = $request->post('title');
        $date = $request->post('date');
        $author = $request->post('author');
        $body = $request->post('body');

        // business logic
        $stmt = $db->prepare("
                        INSERT INTO news (title, date, author, body) 
                        VALUES (:title, :date, :author, :body)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':body', $body);

        $stmt->execute();

        // view
        redirect301("/news");
    }
}