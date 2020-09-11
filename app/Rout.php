<?php

namespace App;

use App\Controllers\SignupController;
use App\Controllers\UserController;

class Rout
{
    static function uri(): array
    {
        return $uri = explode('/', $_SERVER['REQUEST_URI']);
    }

    static function rout()
    {
        $uri = self::uri();
        switch ($uri[1]) {
            case '':
            case 'index':
            case 'home':
                (new UserController())->store();
                require_once('../views/dashboard.html');
                break;
            case 'signup':
                (new SignupController())->index();

                break;
            case 'login':
                require_once('../views/login.html');
                break;
            case 'dashbord':
                require_once('../views/dashboard.html');
                break;
            default:
                header("HTTP/1.0 404 Not Found");
                die("page not found");
        }
    }
}