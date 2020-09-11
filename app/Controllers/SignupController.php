<?php


namespace App\Controllers;


use App\Model\User;

class SignupController
{
    public function index()
    {
        if (isset($_POST['signup'])) {
            //var_dump($_POST);
            //die();
            $user = new User();
            $user->create([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'username' => $_POST['username'],
                'pass' => $_POST['password']
            ]);
            header('Location: /dashbord');
            die();
        }
        require_once "../views/signup.html";
    }
}