<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('components.contacts.contacts'); // Adjust the view path as necessary
    }
}
