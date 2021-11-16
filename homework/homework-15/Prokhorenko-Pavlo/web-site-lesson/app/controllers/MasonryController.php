<?php

final class MasonryController extends AbstractController
{
    
//     "/masonry" => [
//         HTTP_GET => [

//             "handler" => function() use ($dbh):string {

//             $masonry = [];
                        
//                 foreach($dbh->query('SELECT * from masonry ORDER BY id DESC') as $row) {
//                     $masonry[] = $row;
//                 }
                

//                 return loadView(__DIR__ . "/../app/views/masonry.php", [
//                     "masonry" => $masonry
//                 ]);
        
//             },
//         ],
//         HTTP_POST => [
//             "handler" => function() use ($dbh) {
//                 try {
                
//                     $title = $_POST["title"] ?: throw new ValidateException("title is empty");
//                     $image = $_POST["image"] ?: throw new ValidateException("image is empty");                       
//                     $text = $_POST["text"] ?: throw new ValidateException("text is empty");
//                     $author = $_SESSION["user"]["email"] ?: throw new ValidateException("author is empty");

//                     $author = strtok($author, '@');
                    
//                     $stmt = $dbh->prepare("
//                         INSERT INTO masonry (title, image, text,autor,data) 
//                         VALUES (:title, :image, :text, :autor,CURDATE())");
//                     $stmt->bindParam(':title', $title);
//                     $stmt->bindParam(':image', $image);
//                     $stmt->bindParam(':text', $text);
//                     $stmt->bindParam(':autor', $author);                    
                               

//                     $stmt->execute();
                
                    
//                    redirect301("/masonry");

//                 } catch (ValidateException $e) {
//                     echo $e->getMessage();
//                     die();
//                 }
//             }
//         ]
//     ],


//     "/fillmasonry" => [
//         HTTP_GET => [
//             "handler" => function():string {
//                 return loadView(__DIR__ . "/../app/views/fillmasonry.php");
//             },                      
//         ],    
//     ]
  


// ];
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