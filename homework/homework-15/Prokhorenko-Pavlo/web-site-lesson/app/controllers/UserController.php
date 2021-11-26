<?php

final class UserController extends AbstractController
{
    public function index() {


        $content = loadView(__DIR__."/../../app/views/user.php"); 
        $r = new Response($content);
        $r->setTitle('user');
        return $r;
    }


    public function get($id) {

       
    }


    public function post() {
       
    }
}