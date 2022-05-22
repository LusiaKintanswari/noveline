{{-- @dd($authors); --}}

@extends('layouts.main')

@section('container')
    
    <h1 class="mb-5">Halaman Home Genres</h1>
    @foreach ($genres as $genre)
    <article class="mt-3">
        <a href="/genres/{{ $genre->name }}">
            <h2>{{ $genre->name }}</h2>
        </a>
        
    </article>
    @endforeach
@endsection