<?php

namespace App\Http\Controllers;

use App\books;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show(){
        $books = books::all();

        return view('list', ['books' => $books]);
    }
}
