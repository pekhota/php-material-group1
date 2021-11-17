<?php

class AdminController extends AbstractController
{
    public function index(): Response
    {
        /** @var Request $req */
        $req = $this->app->get("request");

        if($req->isValidUser()){

            $result = News::selectByUser($req->getClient());

            $content = loadView(__DIR__ . "/../../app/views/admin.php", [
                "news" => $result
            ]);

            $r = new Response($content);
            $r->setTitle("Admin page");
            return $r;
        }

        redirect301("/login-start");
    }
}