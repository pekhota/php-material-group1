<?php

final class SignController extends AbstractController
{
   
    private $DefaultLayout = __DIR__.'/../../app/layouts/login.php';
    public function signup_get() {

        $content = loadView(__DIR__."/../../app/views/signup.php");
        $r = new Response($content);
        $r->setLayoutPath($this->DefaultLayout);
        $r->setTitle("Sign Up");     
        return $r;
    }
    public function signup_post() {

       
         /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();
        $request = $this->app->get('request');
        $email = $request->post('email');
        $password = $request->post('password');
        
        $passwordHashed = hash("sha256", $password);
        
        $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $passwordHashed);
        $stmt->execute();
        
        redirect301("/login");
      
    }
    public function login_get(){

        $content = loadView(__DIR__."/../../app/views/login.php");
        $r = new Response($content);
        $r->setLayoutPath($this->DefaultLayout);
        $r->setTitle("Login");     
        return $r;
    }
    public function login_post(){

        $request = $this->app->get('request');
        $email = $request->post('email');
        $password = $request->post('password');

        /** @var Users $user */
     
        $user = Users::getbyemail($email);
        
        $passwordHash = hash("sha256", $password);
        if(!empty($user) && $user['password'] === $passwordHash){
          
            $_SESSION["user"] = [
             "email" => $user["email"]
            ];

        redirect301("/user");

        }

    }

    
    public function logout() {
      
        $_SESSION = [];
        redirect301("/");
    }


    public function get($id) {

       
    }


    public function post() {
       
    }
}