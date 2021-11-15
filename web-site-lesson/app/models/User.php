<?php

/**
 * @property $id
 * @property $email
 * @property $password
 */
class User extends Model
{
    protected string $table = "users";

    /**
     * @throws ValidateException
     */
    public static function insert($email, $password)
    {
        $user = Model::findByTableAndColumn("users", "email", $email, new User());

        if($user->isSetAttributes()){
            throw new ValidateException("User exist");
        }

        $passwordHashed = hash("sha256", $password);

        $db = Application::getApp()->get('db')->getConnection();
        $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $passwordHashed);
        $stmt->execute();
    }

    /**
     * @param mixed $email
     * @param mixed $password
     * @param User $modelUser
     * @return bool
     */
    public static function equalsParams(mixed $email, mixed $password, User $modelUser, bool $hashed = true): bool
    {
        if(!$hashed)
        {
            $password = hash("sha256", $password);
        }
        return ($email === $modelUser->email) && ($password === $modelUser->password);
    }

    /**
     * @throws ValidateException
     */
    public static function exceptEmptyFields(mixed $email, mixed $password): void
    {

        if (empty($email)) {
            throw new ValidateException("email is empty");
        }

        if (empty($password)) {
            throw new ValidateException("password is empty");
        }
    }
}