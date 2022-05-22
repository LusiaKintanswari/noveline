{{-- @dd($post) --}}

@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $book->title }}</h2>
        <h5 class="pb-3 border-bottom">
            by <a href="/authors/{{ $book->author->name }}" class="text-decoration-none"> {{ $book->author->name }} </a>, 
            kategori <a href="/genres/{{ $book->genre->name }}" class="text-decoration-none"> {{ $book->genre->name }} </a>
        </h5>
        SYNOPSIS
        <br>
        <br>
        <p class="pb-3 border-bottom">{!! $book->synopsis !!}</p>
        

        <a href="/book/read/{{ $book->title }}">Read Book</a>
        
    </article>

@endsection