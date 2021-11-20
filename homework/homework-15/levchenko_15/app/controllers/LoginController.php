<?php
declare(strict_types=1);
final class LoginController extends AbstractController
{
    public function index():Response
    {
        $content = loadView(__DIR__ . "/../../app/views/login.php",[]);
        $r = new Response($content);
        $r->setTitle("login");
        $r->setLayoutPath(__DIR__."/../../app/layouts/login.php");
        return $r;
    }

    public function get($id):Response {

        /** @var News $model */
        $model = News::findByPk($id);

        $content = loadView(__DIR__."/../../app/views/read.php", [
            'news' => $model
        ]);

        $r = new Response($content);
        $r->setTitle("read news");
        return $r;
    }

    public function post():Response
    {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();

        /** @var Request $request */
        $request = $this->app->get('request');

        $email = $request->post('email');
        $password = $request->post('password');

        $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        (int)$id = $user["id"];

        /** @var News $model */
        $model = News::findAll();

        if ($user === false) {
            throw new ValidateException("user and password is not correct");
        }

        $passwordHashed = hash("sha256", $password);

        if ($user["password"] !== $passwordHashed) {
            throw new ValidateException("password is not correct");
        }

        $content = loadView(__DIR__."/../views/admin.php", [
            'news' => $model
        ]);

        $r = new Response($content);
        $r->setTitle("admin");
        $this->layout=__DIR__."/../layouts/admin.php";
        $r->setLayoutPath(__DIR__."/../../app/layouts/admin.php");
        return $r;
    }

}
