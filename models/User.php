<?php

class User extends Model{

    public static $collection = 'user';

    public function authenticate($email, $password)
    {
        $rez = self::find([
            'email'    => $email,
            'password' => $this->passCrypt($password)
        ]);

        if (!empty($rez)){
            Session::set('user', current($rez));
            return true;
        }

        return false;
    }

    public function register($email, $password, $name)
    {
        $rez = self::find(['email' => $email]);
        if (!empty($rez)){
            return false;
        }

        self::insert([
            'name'     => $name,
            'email'    => $email,
            'password' => $this->passCrypt($password)
        ]);

        return true;
    }

    public function passCrypt($password)
    {
        return sha1($password);
    }

    public static function isUserLoggedIn()
    {
        return (bool)(Session::get('user'));
    }
} 