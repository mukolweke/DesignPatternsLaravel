<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 06:49
 */

namespace App\repository;


use App\User;

class UserRepository
{


    public function getUsers(){
        return User::all();
    }
}