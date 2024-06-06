<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() 
    {
        $u = User::orderBy('full_name')->get();

        return view('user.index', ['users' => $u]);
    }
}
