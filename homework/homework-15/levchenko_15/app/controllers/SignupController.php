<?php
declare(strict_types=1);
final class SignupController extends AbstractController
{
    public function index() {

        $content = loadView(__DIR__ . "/../../app/views/signup.php",[]);

        $r = new Response($content);
        $r->setTitle("all news");
        $r->setLayoutPath(__DIR__."/../../app/layouts/login.php");
        return $r;
    }

    public function post() {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();

        /** @var Request $request */
        $request = $this->app->get('request');

        $email = $request->post('email');
        $password = $request->post('password');

        $stmt = $db->prepare("SELECT * FROM users WHERE email=?");

        $stmt->execute([$email]);
        $user = $stmt->fetch();
        !$user ?: throw new ValidateException("User exist");

        $passwordHashed = hash("sha256", $password);
        $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $passwordHashed);
        $stmt->execute();

        redirect301("/news");
    }
}