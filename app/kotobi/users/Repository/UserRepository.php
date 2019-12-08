<?php

namespace App\kotobi\users\Repository;


use App\kotobi\Repository;
use App\kotobi\users\Models\User;

class UserRepository extends Repository
{
    private $userModel;
    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function create($request){
        $this->userModel->name     = $request['name'];
        $this->userModel->username = $request['username'];
        $this->userModel->email    = $request['email'];
        $this->userModel->password = bcrypt($request['password']);
        $this->userModel->image    = $request['image'] ?? null;
        $this->userModel->group_id = $request['group_id'] ?? 2;
        $this->userModel->save();
    }


}