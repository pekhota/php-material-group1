<?php


class MasonryController extends AbstractController
{
    public function index(): Response
    {
        /** @var Request $req */
        $req = $this->app->get("request");

        $email = str_replace('/', '', $req->getPath());;

        /** @var User $user */
        $user = User::findByColumn("email",$email,new User());

        if(!$user !== null && $user->isSetAttributes()){

            $result = News::selectByUser($user);

            $content = loadView(__DIR__ . "/../../app/views/masonry.php", [
                "news" => $result
            ]);

            $r = new Response($content);
            $r->setTitle("Masonry page");
            return $r;
        }

        redirect301("/news");
    }
}