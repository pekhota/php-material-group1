<?php
declare(strict_types=1);

final class NewsController extends AbstractController
{
    public function index(): Response
    {

        $result = News::selectAll();

        $content = loadView(__DIR__ . "/../../app/views/news.php", [
            "news" => $result
        ]);

        $r = new Response($content);
        $r->setTitle("all news");
        return $r;
    }

    public function get($id): Response
    {

        /** @var News $model */
        $model = News::findByPk($id);

        //------------------------------------------------------------------
        $content = loadView(__DIR__ . "/../views/view.php", [
            'news' => $model
        ]);
        //------------------------------------------------------------------
        $r = new Response($content);
        $r->setTitle("some good title");
        return $r;
    }


    /**
     * @throws ValidateException
     */
    public function post()
    {

        /** @var Request $request */
        $request = $this->app->get('request');


        // validation block
        $title = $request->post('title');
        $date = $request->post('date');
        $author = $request->getUser();
        $body = $request->post('fragment');

        News::insert($title, $date, $body, $author);

        // view
        redirect301("/admin");
    }


    public function delete($id)
    {
        /** @var Request $req */
        $req = $this->app->get("request");
        $user = User::findByColumn("email", $req->getUser(), new User());
        if (!$user !== null && $user->isSetAttributes()) {
            News::delete($id);
            redirect301("/admin");
        }

        redirect301("/login-start");
    }
}