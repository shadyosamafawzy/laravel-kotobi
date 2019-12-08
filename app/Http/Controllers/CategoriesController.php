<?php

namespace App\Http\Controllers;

use App\kotobi\books\Models\Categories;
use App\kotobi\books\Service\CategoriesService;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    private $catService;
    public function __construct(CategoriesService $categoriesService)
    {
        $this->catService = $categoriesService;
    }

    public function index()
    {
        return view('admin.categories')->with('categories', $this->catService->index());
    }

    public function addForm()
    {
        return view('admin.addCategory');
    }

    public function addProcess()
    {
        $this->catService->add();
        return redirect('categories');
    }

    public function delete(Categories $category)
    {
        $category->forceDelete();
        return redirect('categories');
    }

    public function editForm(Categories $category)
    {
        return view('admin.editCategory')->with('category',$category->findOrFail($category->cat_id));
    }

    public function editProcess($id)
    {
        $this->catService->edit($id);
        return redirect('categories');
    }
}
