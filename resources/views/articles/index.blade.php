@include('layouts.head')
@include('layouts.mainmenu')

<div class="articles-header">
    <h1>{{ $title}}</h1>
</div>
<div class="articles-items">
    @forelse ($articles as $item)
        <div class="news-item">
            <h2>{{ $item->title }}</h2>
            <p>{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j F Y')}}</p>
            <p>{{ Str::limit($item->content, 200) }}</p>
            @if ($item->img_path)
                <img src="{{ Storage::url($item->img_path) }}" alt="{{ $item->title }}" width="200">
            @endif
            <a href="{{ route('articles.show', $item->id) }}">Read more</a>

            <p>Published: {{ $item->is_published ? 'Yes' : 'No' }}</p>
        </div>
    @empty
        <p>No news available.</p>
    @endforelse
</div>



@include('layouts.footer')

