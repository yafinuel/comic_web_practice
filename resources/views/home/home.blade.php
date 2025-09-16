@extends('layouts.app')

@section('title', 'Home')

@section('content')

<header>
    <h1 class="logo">Logoipsum</h1>
</header>
<div class="header"></div>
<main>
    <section class="sub-section">
        <h2>Rekomendasi</h2>
        <div class="card-list">
            @for ($x=0; $x < 5; $x++)
                @include('partials.card')
            @endfor
        </div>
    </section>
</main>

@endsection