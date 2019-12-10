<?php

namespace App\kotobi\books\Repository;

use App\kotobi\books\Models\Authors;
use App\kotobi\Repository;

class AuthorsRepository extends Repository
{
    public function index()
    {
      return Authors::latest()->get();
    }



    public function add($request)
    {
        $newName =  $this->uploadImage();
        $author = new Authors;
        $author->name = $request['name'];
        $author->image = $newName;
        $author->save();
    }

    public function edit($id,$request)
    {
        $oldName = Authors::findOrFail($id)->image;
        $author  = Authors::findOrFail($id);
        if(!request()->hasfile('image')){
            request()->image = $oldName;
            Authors::where('author_id' ,$id)->update($request);
        }
        else
        {
            unlink(public_path("uploads/$oldName"));
            $newName = $this->uploadImage();
            $author->name   = $request['name'];
            $author->image  = $newName;
            $author->save();
        }

    }

    public function uploadImage()
    {
        $image   = request()->file('image');
        $newName = md5(time()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/uploads',$newName);
        request()->image = $newName;
        return $newName;
    }

}