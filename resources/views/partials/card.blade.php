<a href="{{ route('show',  ['id' => $comic->id]) }}">
    <div class="card">
        <img src="/img/comic-cover.jpg" alt="" class="comic-cover">
        <div class="card-header">
            <h3>{{ $comic->title }}</h3>
        </div>
    </div>
</a>