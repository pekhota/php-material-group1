<?php
declare(strict_types=1);


class GateController extends AbstractController
{

    /** @var Request $request */
    private mixed $request;


    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->request = $this->app->get('request');
    }

    public function start_register(): Response
    {
        $content = loadView(__DIR__ . "/../../app/views/signup.php", [
        ]);
        $r = new Response($content);
        $r->setTitle("Registration page");
        return $r;
    }

    public function end_register()
    {
        try {

            $email = $this->request->post('user');
            $password = $this->request->post('pass');

            User::exceptEmptyFields($email, $password);

            User::insert($email, $password);

            redirect301("/login-start");

        } catch (ValidateException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function start_login(): Response
    {
        $content = loadView(__DIR__ . "/../../app/views/login.php", [
        ]);
        $r = new Response($content);
        $r->setTitle("Logging page");
        return $r;
    }

    public function end_login()
    {
        try {

            $email = $this->request->post('user');
            $password = $this->request->post('pass');

            User::exceptEmptyFields($email, $password);

            /** @var User $user */
            $user = User::findByColumn("email", $email, new User());

            if (!User::equalsParams($email,$password,$user,false)) {
                throw new ValidateException("User and password is not correct");
            }

            $_SESSION["user"] = [
                "email" => $user->email,
                "pass" => $user->password
            ];

            $cookie_name = "user";
            $cookie_value = $user->email . "-" . $user->password;

            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", httponly:true); // 86400 = 1 day

            redirect301("/admin");

        } catch (ValidateException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function logout(): void
    {
        $_SESSION = [];
        redirect301("/");
    }



}