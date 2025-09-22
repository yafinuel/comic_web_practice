@extends('layouts.app')

@section('title', 'Search')

@section('content')
<main class="container-body">
    <h2>Hasil pencarian</h2>
    <div class="search-bar">
        <a href="{{route('home')}}">kembali</a>
        <form action="{{route('search')}}" method="get">
            <input type="search" name="search" id="search" class="search-field search-field--main" placeholder="search">
        </form>
    </div>
    <section class="sub-section container">
        <div class="card-list">
            @foreach ($comics as $comic)
                @include('partials.card')
            @endforeach
        </div>
    </section>
</main>
@endsection