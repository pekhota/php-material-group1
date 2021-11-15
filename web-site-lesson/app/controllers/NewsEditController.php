<?php

class NewsEditController extends AbstractController
{
    public function get($id): Response
    {

        /** @var Request $req */
        $req = $this->app->get("request");

        if($req->isValidUser()){
            /** @var News $news */
            $result = News::findByTableAndColumn("news","id",$id, new News());

            if($result!=null && $result->isSetAttributes()){

                $content = loadView(__DIR__ . "/../../app/views/edit-news.php", [
                    'news' => $result
                ]);

                $r = new Response($content);
                $r->setTitle("Edit news");

                return $r;
            }
            redirect301("/admin");
        }
        redirect301("/login-start");
    }


    /**
     * @throws ValidateException
     */
    public function post($id) {

        /** @var Request $req */
        $request = $this->app->get("request");

        if($request->isValidUser()){

            $title = $request->post('title');
            $date = $request->post('date');
            $author = $request->getUser();
            $body = $request->post('fragment');

            News::update($title,$date,$body,$author,$id);


            // view
            redirect301("/admin");
        }
        redirect301("/login-start");
    }
}