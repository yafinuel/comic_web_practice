@extends('layouts.app')

@section('title', 'Show')

@section('content')

<main>
    <section class="content">
        <div>
            <h2>{{ $comicTitle }}</h2>
        </div>
        <div>
            <p>{{ $comicDesc }}</p>
        </div>
    </section>
</main>
    
@endsection