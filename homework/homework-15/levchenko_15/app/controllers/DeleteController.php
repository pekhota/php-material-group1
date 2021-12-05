<?php
declare(strict_types=1);
final class DeleteController extends AbstractController
{
    public function get($id): Response
    {

        /** @var News $model */
        $model = News::findByPk($id);

        $content = loadView(__DIR__ . "/../views/delete.php", [
            'news' => $model
        ]);

        $r = new Response($content);
        $r->setTitle("delete news");
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }

    public function post($id): Response
    {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();

        $stmt = $db->prepare("
                        DELETE FROM news WHERE id='$id'");
        $stmt->execute();
        redirect301("/news");
    }
}