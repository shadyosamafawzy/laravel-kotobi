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
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.authors')->with('authors', $this->authorsService->index());

    }

    public function addForm()
    {
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.addAuthor');

    }

    public function addProcess()
    {
        if(session('group_id') != 1)
            return redirect('101');
        $this->authorsService->add();
        return redirect('authors');
    }

    public function delete(Authors $authors)
    {
        if(session('group_id') != 1)
            return redirect('101');
        unlink(public_path('uploads/'.$authors->first()->image));
        $authors->forceDelete();
        return redirect('authors');
    }

    public function editForm(Authors $authors)
    {
        if(session('group_id') != 1)
            return redirect('101');
        return view('admin.editAuthor')->with('author' ,$authors->findOrFail($authors->author_id));
    }

    public function editProcess($id)
    {
        if(session('group_id') != 1)
            return redirect('101');
        $this->authorsService->edit($id);
        return redirect('authors');

    }
}