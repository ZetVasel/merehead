<?php

namespace App\Http\Controllers;
use App\books;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add(){

        return view('add');
    }
    public function create(){

        $books = new books();
        $books->author = request('author');
        $books->title = request('title');
        $books->pages = request('pages');
        $books->description = request('description');
        $books->images = request('images');

        $books->save();

        return redirect('list');

    }
}
