<?php

namespace App\kotobi;


class Repository
{
    public function uploadImage()
    {
        $image   = request()->file('image');
        $newName = md5(time()).'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/uploads',$newName);
        request()->image = $newName;
        return $newName;
    }
}