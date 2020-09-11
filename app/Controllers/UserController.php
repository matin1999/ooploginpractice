<?php


namespace App\Controllers;


use App\Model\User;

class UserController
{
    function store(){
        $user=new User();
        $user->create(['name'=>'ali','email'=>'matin@gmail.com','phone'=>'09011641095','username'=>'sdfgh','pass'=>'ali','usertype'=>'ali']);
    }

}