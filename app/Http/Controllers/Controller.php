<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function checkUser(){
        if(session('group_id') != null)
        {
                if (session('group_id') == 1)
                    return view('admin.index');

                elseif (session('group_id') == 2)
                    return view('users.index');
        }
        else
        {
            return view('guest.index');
        }

    }
}
