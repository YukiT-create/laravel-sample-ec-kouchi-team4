<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function show(User $user){
        return view('users.show',[
           'title' => 'プロフィール',
           'user'  => $user,
        ]);
    }
}
