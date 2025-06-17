<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatataController extends Controller
{
    public function index(){
        $name = 'Hiago Pilar';
        return view('name', ['name' => $name]);
    }
}
