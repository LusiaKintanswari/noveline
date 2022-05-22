{{-- @dd($posts); --}}
@extends('layouts.main')

@section('container')
    <h1> {{ $title }} </h1>
    @foreach ($books as $book)
        <article class="mb-5 mt-3 border-bottom">
            <a href="/book/{{ $book->title }}" class="text-decoration-none">
                <h2>{{ $book->title }}</h2>
            </a>

            <h5>
                by <a href="/authors/{{ $book->author->name }}" class="text-decoration-none"> {{ $book->author->name }} </a>, 
                genre <a href="/genres/{{ $book->genre->name }}" class="text-decoration-none"> {{ $book->genre->name }} </a>
            </h5>

            <p>{{ $book->synopsis }}
                <a href="/book/{{ $book->title }}" class="text-decoration-none">read more</a>
            </p>
        </article>

        
    
        
    @endforeach
@endsection

