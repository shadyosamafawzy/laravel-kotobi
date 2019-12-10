<?php

namespace App\kotobi\books\Repository;


use App\kotobi\books\Models\Books;
use App\kotobi\Repository;

class BooksRepository extends Repository
{
    private $bookModel;
    public function __construct(Books $books)
    {
        $this->bookModel = $books ;
    }

    public function index()
    {
        return $this->bookModel->latest()->get();
    }

    public function add($request)
    {
        $newName = $this->uploadImage();


        $this->bookModel->title       = $request['title'];
        $this->bookModel->description = $request['description'];
        $this->bookModel->author_id   = $request['author_id'];
        $this->bookModel->image       = $newName;
        $this->bookModel->save();
    }

    public function edit($id,$request)
    {
        $book = $this->bookModel->findOrFail($id);
        $oldName = $this->bookModel->findOrFail($id)->image;
        $book->title        = $request['title'];
        $book->description  = $request['description'];
        $book->author_id    = $request['author_id'];
        if(!request()->hasfile('image'))
        {
            $book->image    = $oldName;
            $book->save();
        }
        else
        {
            unlink(public_path("uploads/$oldName"));
            $newName = $this->uploadImage();
            $book->image = $newName;
            $book->save();
        }
    }
}