<?php
declare(strict_types=1);
final class EditController extends AbstractController
{
    public function get($id):Response {

        /** @var News $model */
        $model = News::findByPk($id);

        $content = loadView(__DIR__."/../views/edit.php", [
            'news' => $model
        ]);

        $r = new Response($content);
        $r->setTitle("edit news");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }

    public function post($id):Response {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();

        /** @var Request $request */
        $request = $this->app->get('request');

        $title = $request->post('title');
        $date = $request->post('date');
        $author = $request->post('author');
        $body = $request->post('body');

        $stmt = $db->prepare("
                        UPDATE news 
                        SET title='$title', date='$date', author='$author', body='$body' WHERE id='$id'");

        $stmt->execute();
        redirect301("/news");
    }
}