<?php

final class MasonryController extends AbstractController
{
      
    public function index() {

        $result = Masonry::findAll();
        

        $content = loadView(__DIR__."/../../app/views/masonry.php", [
            'masonry' => $result
        ]);

        $r = new Response($content);
        $r->setTitle("all masonry");
        return $r;
    }

   

    public function post() {
        /** @var PDO $db */
        $db = $this->app->get('db')->getConnection();
                  
                        $request = $this->app->get('request'); 
                        $title = $request->post('title');
                        $image = $request->post('image');                      
                        $text =  $request->post('text');
                        $author = $request->post('author');
            
                        $author = strtok($author, '@');
                                
                   $stmt = $db->prepare("
                            INSERT INTO masonry (title, image, text,author,data) 
                            VALUES (:title, :image, :text, :author,CURDATE())");
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':image', $image);
                    $stmt->bindParam(':text', $text);
                    $stmt->bindParam(':author', $author);                    
                                           
                         $stmt->execute();
                                                    
               redirect301("/masonry");
                                   
      }

    public function add() {

        
        $content = loadView(__DIR__."/../../app/views/fillmasonry.php");
            
        $r = new Response($content);
        $r->setTitle("add masonry");
        return $r;

            
    }

    
}