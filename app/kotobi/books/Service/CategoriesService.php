<?php

namespace App\kotobi\books\Service;


use App\kotobi\books\Models\Categories;
use App\kotobi\books\Repository\CategoriesRepository;
use App\kotobi\Service;

class CategoriesService extends Service
{
    private $catRepo;
    public function __construct(CategoriesRepository $categoriesRepository)
    {
        $this->catRepo = $categoriesRepository;
    }

    public function index()
    {
        if( count( $this->catRepo->index()) > 0)
            return $this->catRepo->index();

        return 'No Categories Found Please Insert Category';
    }

    public function add()
    {
        if ($this->catRepo->add(request()->validate([
            'cat_name'     => 'required|min:4|max:30'
        ])))
            return true;
    }


    public function edit($id)
    {
        if ($this->catRepo->edit($id,request()->validate([
            'cat_name'     => 'required|min:4|max:30'
        ])))
            return true;
    }
}