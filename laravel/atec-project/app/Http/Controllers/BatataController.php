<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatataController extends Controller
{
    public function index(){
        $batata = 'Batata';
        return view('batata.index', ['batata' => $batata]);
    }
}
