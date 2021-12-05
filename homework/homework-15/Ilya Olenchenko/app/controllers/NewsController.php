<?php

final class NewsController extends AbstractController
{

      private $AdminLeyoutPath =  __DIR__."/../../app/layouts/admin.php";


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

        $content = loadView(__DIR__."/../views/view.php", [
            'news' => $model
        ]);

        $r = new Response($content);
        $r->setTitle("some good title");
        return $r;
    }


    public function post() {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();

        /** @var Request $request */
        $request = $this->app->get('request');

        $title = $request->post('title');
        $date = $request->post('date');
        $author = $request->post('author');
        $body = $request->post('body');

        $stmt = $db->prepare("
                        INSERT INTO news (title, date, author, body) 
                        VALUES (:title, :date, :author, :body)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':body', $body);

        $stmt->execute();

        // view
        redirect301("/adminpanel/news");
    }

    public function delete($id) {

        /** @var News $model */
         
        $model = News::delete($id);

        redirect301('/adminpanel/news');
      
    }

    public function details($id) {

        /** @var News $model */

        $news = News::findByPk($id);

        $content = loadView(__DIR__ . "/../../app/views/NewsDetails.php", [
            "news" => $news
        ]);


        $r = new Response($content);
        $r->setLayoutPath($this->AdminLeyoutPath);
        $r->setTitle("news");
        return $r;
      
      
    }
    public function edit_get($id) {

        /** @var News $model */

        $news = News::findByPk($id);

        $content = loadView(__DIR__ . "/../../app/views/NewsEdit.php", [
            "news" => $news
        ]);

        $r = new Response($content);
        $r->setLayoutPath($this->AdminLeyoutPath);
        $r->setTitle("news");
        return $r;
      
      
    }
    public function edit_post() {

        $db = $this->app->get('db')->getConnection();
        $request = $this->app->get('request');
       
        $id = $request->post('id');
        $title = $request->post('title');
        $date = $request->post('date');
        $author = $request->post('author');
        $body = $request->post('body');

        //$news = News::findByPk($id);
        $stmt = $db->prepare(
            "UPDATE news
            SET title = :title, date = :date, author = :author, body = :body
            WHERE id = :id");

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':body', $body);




        $stmt->execute();
        redirect301('/adminpanel/news');
      
      
    }





    public function AdminPanel() {

        $result = News::findAll();

        $content = loadView(__DIR__ . "/../../app/views/AdminNews.php", [
            "news" => $result
        ]);

        $r = new Response($content);
        $r->setLayoutPath($this->AdminLeyoutPath);
        $r->setTitle("all news");
        return $r;
      
    }




}