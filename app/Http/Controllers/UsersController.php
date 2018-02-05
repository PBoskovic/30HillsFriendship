<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(User $user)
    {

        $users = $user->all();

        return view('index', compact('users'));


    }

    public function show(User $user)
    {
//        $friends = Auth::user()->friends();
//        $friends = Friendship::where('friend_one', User::with('id'));
        return view('show', compact('user'));

    }
}
