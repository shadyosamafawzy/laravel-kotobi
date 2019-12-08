<?php

namespace App\Http\Controllers;

use App\kotobi\users\Models\User;
use App\kotobi\users\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $service)
    {
        $this->userService = $service;
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('login');
    }
    public function loginForm()
    {
        if(session('username') != null)
            return redirect('/home');
        return view('login');
    }
    public function loginProcess(Request $request)
    {
        if (Auth::attempt(['username' => $request->username , 'password' => $request->password])) {
            session(['username' => Auth::user()->username ,'user_id' => Auth::user()->user_id ,'group_id' => Auth::user()->group_id ]);
            return redirect('home');
        }
        return redirect()->back()->with('error','invalid username or password');
    }

    public function registerForm()
    {
        if(session('username') != null)
            return redirect('/home');
        return view('register');
    }
    public function registerProcess()
    {
        $this->userService->create();
        return redirect('login');
    }
}
