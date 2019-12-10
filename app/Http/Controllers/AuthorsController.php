<?php

namespace App\Http\Controllers;


use App\kotobi\books\Models\Authors;
use App\kotobi\books\Service\AuthorsService;

class AuthorsController extends Controller
{

    private $authorsService;
    public function __construct(AuthorsService $authorsService)
    {
        $this->authorsService = $authorsService;
    }

    public function index()
    {
        return view('admin.authors')->with('authors', $this->authorsService->index());
    }

    public function addForm()
    {
        return view('admin.addAuthor');
    }

    public function addProcess()
    {
        $this->authorsService->add();
        return redirect('authors');
    }

    public function delete(Authors $authors)
    {
        $authors->forceDelete();
        return redirect('authors');
    }

    public function editForm(Authors $authors)
    {
        return view('admin.editAuthor')->with('author' ,$authors->findOrFail($authors->author_id));
    }

    public function editProcess($id)
    {
        //dd(request()->get('image'));
        $this->authorsService->edit($id);
        return redirect('authors');
    }
}