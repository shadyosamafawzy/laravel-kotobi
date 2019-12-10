<?php

namespace App\Http\Controllers;


use App\kotobi\books\Models\Books;
use App\kotobi\books\Service\AuthorsService;
use App\kotobi\books\Service\BooksService;

class BooksController extends Controller
{
    private $booksService;
    private $authorService;
    public function __construct(BooksService $service ,AuthorsService $authorsService)
    {
        $this->booksService   = $service;
        $this->authorService  = $authorsService;
    }

    public function index()
    {
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.books')->with('books', $this->booksService->index());
    }

    public function addForm()
    {
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.addBook')->with('authors', $this->authorService->index());
    }

    public function addProcess()
    {
        if(session('group_id') != 1)
            return redirect('101');
        $this->booksService->add();
        return redirect('books');
    }

    public function delete(Books $book)
    {
        if(session('group_id') != 1)
            return redirect('101');
        unlink(public_path('uploads/'.$book->first()->image));
        $book->forceDelete();
        return redirect('books');
    }

    public function editForm($id)
    {
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.editBook')->with('authors', $this->authorService->index())->with('book', Books::findOrFail($id));
    }

    public function editProcess($id)
    {
        if(session('group_id') != 1)
        return redirect('101');
        $this->booksService->edit($id);
        return redirect('books');
    }

}