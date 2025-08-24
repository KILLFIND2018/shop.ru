@include('layouts.head')
@include('layouts.mainmenu')

<div class="news-header">
    <h1>{{ $title}}</h1>
</div>
<div class="news-items">

        <div class="news-item">
            <h2>{{ $news->title }}</h2>
            <p>{{ \Carbon\Carbon::parse($news->date)->translatedFormat('j F Y')}}</p>
            <p>{{ $news->content }}</p>
            @if ($news->img_path)
                <img src="{{ Storage::url($news->img_path) }}" alt="{{ $news->title }}" width="200">
            @endif

        </div>

</div>



@include('layouts.footer')

