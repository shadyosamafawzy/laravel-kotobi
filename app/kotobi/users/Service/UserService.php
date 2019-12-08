<?php

namespace App\kotobi\users\Service;


use App\kotobi\Service;
use App\kotobi\users\Repository\UserRepository;

class UserService extends Service
{
    private $userRepo;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function create()
    {
        $request = request()->validate([
            'name'     => 'required|min:2|max:30',
            'email'    => 'required|email',
            'username' => 'required|min:5|max:30',
            'password' => 'required|min:8|max:100'
        ]);

        $this->userRepo->create($request);

    }
}