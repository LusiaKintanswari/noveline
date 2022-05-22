{{-- @dd($authors); --}}

@extends('layouts.main')

@section('container')
    
    <h1 class="mb-5">Halaman Home Author</h1>
    @foreach ($authors as $author)
    <article class="mt-3">
        <a href="/authors/{{ $author->name }}">
            <h2>{{ $author->name }}</h2>
        </a>
        
    </article>
    @endforeach
@endsection