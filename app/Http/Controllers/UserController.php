<?php

namespace App\Http\Controllers;

use App\repository\UserRepository;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @param  User  $users
     * @return void
     */

    // injection of repository
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    // no need to pass the id
    public function index()
    {
        // access repository method of getting users
        $users = $this->repository->getUsers();
        return view('users', compact('users'));
    }


}
