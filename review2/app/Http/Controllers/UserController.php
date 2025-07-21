<?php

namespace App\Http\Controllers;
use App\User;
use App\Country;
use App\Bicycle;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){

        $users = User::with('country')->get();
        $users = User::with('bicycles')->get();

        return view('components.user.index', compact('users'));
    }
}
