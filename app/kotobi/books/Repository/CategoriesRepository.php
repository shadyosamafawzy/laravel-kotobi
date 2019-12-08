<?php

namespace App\kotobi\books\Repository;


use App\kotobi\books\Models\Categories;
use App\kotobi\Repository;

class CategoriesRepository extends Repository
{
    private $catModel;
    public function __construct(Categories $categories)
    {
        $this->catModel = $categories;
    }

    public function index()
    {
        return $this->catModel->latest()->get();
    }

    public function add($request)
    {
        $this->catModel->cat_name = $request['cat_name'];
        $this->catModel->save();
    }

    public function edit($id,$request)
    {
        $this->catModel->where('cat_id' ,$id)->update($request);
    }

}