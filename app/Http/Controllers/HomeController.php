<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Home;

class HomeController extends Controller
{
    public function show_home(){
        return view('home', [
            "title"=>"Home",
            "books" => Book::with(['author','genre','home'])->latest()->get() 
        ]);
    }
    public function show_authors(){
        return view('home_authors', [
            "title"=>"Home",
            "authors" => Author::all()
        ]);
    }
    public function show_genres(){
        return view('home_genres', [
            "title"=>"Home",
            "genres" => Genre::all()
        ]);
    }

    public function show_author_details(Author $author) {
        return view('home_details', [
            'title' => "Post by Author : $author->name",
            'books' => $author->book->load('author', 'genre','home')
            //load utk mencegah n+1 problem kalo ga pake controller
            //ambil seluruh post sekalian sm relationnya
        ]);
    }

    public function show_genre_details(Genre $genre) {
        return view('home_details', [
            'title' => "Post with genre : $genre->name",
            'books' => $genre->book->load('author', 'genre','home')
            //load utk mencegah n+1 problem kalo ga pake controller
            //ambil seluruh post sekalian sm relationnya
        ]);
    }
    
}
