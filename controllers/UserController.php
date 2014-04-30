<?php

/**
 * Class UserController
 */
class UserController extends BaseController{

    // user model
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * User login page/method
     */
    public function login()
    {
        if (User::isUserLoggedIn()){
            Core::redirect('/');
        }

        // if we get data - try to login
        if (Input::isPost()){
            if ($this->user->authenticate(Input::post('email'), Input::post('password'))){
                Session::setFlash('Hello, '. Input::post('email'));
                Core::redirect('/');
            }else{
                Session::setFlash('Sorry, your email not found in db. Are you registered?');
            }
        }

        View::make('user/login');
    }

    /**
     * User register page/method
     */
    public function register()
    {
        if (User::isUserLoggedIn()){
            Core::redirect('/');
        }

        // if we get data - try to register
        if (Input::isPost()){
            if ($this->user->register(Input::post('email'), Input::post('password'), Input::post('name'))){
                Session::setFlash('Successfully!');
                Core::redirect('login');
            }else{
                Session::setFlash('Failed');
            }
        }

        View::make('user/register');
    }

    /**
     * User logout method
     */
    public function logout()
    {
        Session::remove('user');
        Core::redirect('/');
    }

} 