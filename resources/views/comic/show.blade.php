@extends('layouts.app')

@section('title', 'Show')

@section('content')
<div class="container-body">
    <main class="container-main">
        <section class="header-main">
            <img src="/img/comic-cover.jpg" alt="">
        </section>
        <section class="container">
            <div>
                <h2>{{ $comic->title }}</h2>
            </div>
            <div>
                <p>{{ $comic->description }}</p>
            </div>
            <div>
                <ul>
                    <li>Tipe: {{$comic->type}}</li>
                    <li>Author: {{$comic->author}}</li>
                    <li>Release date: {{$comic->published_at}}</li>
                    <li>Genre: {{$comic->genre}}</li>
                </ul>
            </div>
        </section>
    </main>
</div>
    
@endsection