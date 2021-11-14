<?php

/**
 * @property $id
 * @property $email
 * @property $password
 */
class Users extends Model
{
    protected string $table = "users";

    public static function getbyemail($email){
        $model = new static();
        $table = $model->getTable();
        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("SELECT * FROM {$table} WHERE email=?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        //dd($user);
        $stmt->execute();
        //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 

        return $user;
    }
}

