@include('layouts.head')
@include('layouts.mainmenu')

<div class="articles-header">
    <h1>{{ $title}}</h1>
</div>
<div class="articles-items">

    <div class="articles-item">
        <h2>{{ $articles->title }}</h2>
        <p>{{ \Carbon\Carbon::parse($articles->date)->translatedFormat('j F Y')}}</p>
        <p>{{ $articles->content }}</p>
        @if ($articles->img_path)
            <img src="{{ Storage::url($articles->img_path) }}" alt="{{ $articles->title }}" width="200">
        @endif

    </div>

</div>



@include('layouts.footer')

