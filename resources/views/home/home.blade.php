@extends('layouts.app')

@section('title', 'Home')

@section('content')

<header class="navbar">
    <h1 class="logo">Logoipsum</h1>
    <form action="{{route('search')}}" method="get">
        <input type="search" name="search" id="search" class="search-field search-field--nav" placeholder="search">
    </form>
</header>
<div class="header"></div>
<main class="container-body">
    <section class="sub-section container">
        <h2>Rilisan terbaru</h2>
        <div class="card-list">
            @foreach ($newestComics as $comic)
                @include('partials.card')
            @endforeach
        </div>
    </section>
    <section class="sub-section container">
        <div class="sub-section--header">
            <h2>Koleksi komik</h2>
            <div class="container-main">
                <div>
                    <p>jumlah data: {{count($comics)}}</p>
                    <p>Rilisan terbaru: {{$latest->title}}</p>
                    <p>Rilisan terlama: {{$oldest->title}}</p>
                </div>

                <form action="{{route('home')}}" method="get">
                    <select name="author" id="author-select" onchange="this.form.submit()">
                        <option value="">Cari berdasarkan penulis</option>
                        @foreach ($authors as $author)
                            <option value="{{$author}}" {{request('author') == $author ? 'selected' : ''}}>
                                {{$author}}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
        <div class="card-list">
            @foreach ($comics as $comic)
                @include('partials.card')
            @endforeach
        </div>
    </section>
</main>

@endsection