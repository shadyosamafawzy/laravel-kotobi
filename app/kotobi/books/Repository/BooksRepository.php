<?php

namespace App\kotobi\books\Repository;


use App\kotobi\books\Models\Books;
use App\kotobi\books\Models\Books_Categories;
use App\kotobi\Repository;

class BooksRepository extends Repository
{
    private $bookModel;
    private $bookCatModel;
    public function __construct(Books $books ,Books_Categories $books_Categories)
    {
        $this->bookModel    = $books ;
        $this->bookCatModel = $books_Categories ;
    }

    public function index()
    {
        return $this->bookModel->latest()->get();
    }

    public function add($request)
    {
        //dd(count($request['categories']));
        $newName = $this->uploadImage();
        $this->bookModel->title       = $request['title'];
        $this->bookModel->description = $request['description'];
        $this->bookModel->author_id   = $request['author_id'];
        $this->bookModel->image       = $newName;
        $this->bookModel->save();
        $book = $this->bookModel->latest()->get();

       for($i = 0 ; $i < count($request['categories']) ; )
        {
            $this->bookCatModel->book_id = $book[0]->book_id;
            $this->bookCatModel->cat_id  = $request['categories'][$i];
            $this->bookCatModel->save();
            $i++;
        }
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