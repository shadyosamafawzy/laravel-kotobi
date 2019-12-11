<?php

namespace App\Http\Controllers;


use App\kotobi\books\Models\Authors;
use App\kotobi\books\Models\Books;
use App\kotobi\books\Models\Books_Categories;
use App\kotobi\books\Models\Categories;
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
        return view('admin.addBook')->with('authors', $this->authorService->index())->with('categories', Categories::all());
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
        unlink(public_path('uploads/'.$book->image));
        $book->forceDelete();
        return redirect('books');
    }

    public function editForm($id)
    {
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.editBook')->with('authors', $this->authorService->index())->with('book', Books::findOrFail($id))->with('categories', Categories::all());
    }

    public function editProcess($id)
    {
        if(session('group_id') != 1)
            return redirect('101');
        $this->booksService->edit($id);
        return redirect('books');
    }

    public function findBook($id)
    {
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.book')
            ->with('book' , Books::findOrFail($id))
            ->with('author', Authors::where('author_id',Books::findOrFail($id)->author_id)->get())
            ->with('categories', Categories::where('cat_id', Books_Categories::where('book_id', Books::findOrFail($id)->book_id)->get()->first()->cat_id)->get()->first()->cat_name);
    }

}