<?php
declare(strict_types=1);


/**
 * @property $id
 * @property $title
 * @property $date
 * @property $body
 * @property $author
 */
class News extends Model
{
    protected string $table = "news";


    /**
     * @throws ValidateException
     */
    public static function insert($title, $date, $body, $author)
    {

        News::exceptEmptyFields($title, $date, $body, $author);

        $user = User::findByColumn("email",$author, new User());

        if(isset($user) && $user->isSetAttributes()){
            $db = Application::getApp()->get('db')->getConnection();

            $author = $user->attributes["id"];

            $stmt = $db->prepare("
                        INSERT INTO news (title, date, body, user_id) 
                        VALUES (:title, :date, :body, :user_id)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':body', $body);
            $stmt->bindParam(':user_id', $author);

            $stmt->execute();
        }
    }

    public static function selectAll(): array
    {
        $stmt = "SELECT news.title, news.date, news.body, users.email AS author FROM news INNER JOIN users ON news.user_id=users.id";
        return News::findAll($stmt);
    }

    public static function selectByUser(User $user): array
    {
        $stmt = "SELECT news.id, news.title, news.date, news.body, users.email AS author FROM news INNER JOIN users ON news.user_id=users.id  WHERE user_id=".$user->id;
        return News::findAll($stmt);
    }
    /**
     * @throws ValidateException
     */
    public static function exceptEmptyFields($title, $date, $body, $author): void
    {

        if (empty($title)) {
            throw new ValidateException("title is empty");
        }

        if (empty($date)) {
            throw new ValidateException("date is empty");
        }

        if (empty($body)) {
            throw new ValidateException("text is empty");
        }
        if (empty($author)) {
            throw new ValidateException("author is empty");
        }
    }
    public static function delete($id){
        Model::deleteByPk($id,"news");
    }

    /**
     * @throws ValidateException
     */
    public static function update($title, $date, $body, $author, $id_news):bool{

        News::exceptEmptyFields($title, $date, $body,$author );

        $user = User::findByColumn("email",$author, new User());
        $news = News::findByColumn("id", $id_news, new News());

        if(isset($user) && $user->isSetAttributes() && isset($news) && $news->isSetAttributes() && $user->attributes["id"]===$news->attributes["user_id"]){
            $db = Application::getApp()->get('db')->getConnection();

            $stmt = $db->prepare("UPDATE news SET title=?,date=?,body=? WHERE id=?");
            $stmt->execute([$title,$date,$body,$id_news]);
            return true;
        }
        return false;
    }

    public function isSetAttributes(): bool
    {
        return !empty($this->attributes);
    }
}