<?php

namespace App\kotobi\books\Service;


use App\kotobi\books\Repository\AuthorsRepository;
use App\kotobi\Service;

class AuthorsService extends Service
{
    private $authorsRepo;
    public function __construct(AuthorsRepository $authorsRepository)
    {
        $this->authorsRepo = $authorsRepository;
    }



    public function index()
    {
        if( count( $this->authorsRepo->index()) > 0)
            return $this->authorsRepo->index();

        return 'No Authors Found Please Insert Author';
    }



    public function add()
    {

        if ($this->authorsRepo->add(request()->validate([
            'name'     => 'required|min:4|max:30',
            'image'     => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ])))
            return true;
    }

    public function edit($id)
    {
        if ($this->authorsRepo->edit($id,request()->validate([
            'name'     => 'required|min:4|max:30',
            'image'     => 'image|mimes:jpeg,png,jpg|max:2048',
        ])))
            return true;
    }
}