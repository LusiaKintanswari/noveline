<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Library;

class LibraryController extends Controller
{
    public function show_library(){

        return view('library', [
            "title"=>"Library"
        ]);
    }
}
