<?php

namespace App\kotobi\books\Service;


use App\kotobi\books\Repository\BooksRepository;
use App\kotobi\Service;

class BooksService extends Service
{
    private $bookRepo;
    public function __construct(BooksRepository $booksRepository)
    {
        $this->bookRepo = $booksRepository;
    }

    public function index()
    {
        if(count($this->bookRepo->index()) > 0)
            return $this->bookRepo->index();
        return 'No Books Yet Please Insert One';
    }

    public function add()
    {
        if($this->bookRepo->add(request()->validate([
            'title'       => 'required|min:1|max:100',
            'description' => 'required|min:20',
            'author_id'   => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'categories'  => 'required'
        ])))
            return true;

        return false;
    }

    public function edit($id)
    {
        if($this->bookRepo->edit($id,request()->validate([
            'title'       => 'required|min:1|max:100',
            'description' => 'required|min:20',
            'author_id'   => 'required',
            'image'       => 'image|mimes:jpeg,png,jpg|max:2048'
        ])))
            return true;
    }
}