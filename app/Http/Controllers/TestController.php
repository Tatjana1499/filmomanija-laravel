<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\User_Resource;


class TestController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }
    public function show(User $user)
    {
        return new User_Resource($user);
    }
}
