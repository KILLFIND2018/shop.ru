@include('layouts.admin.head')
    <div class="main-container">
        <div class="news-item">
            <h2>{{ $news->title }}</h2>
            <p>{{ \Carbon\Carbon::parse($news->date)->translatedFormat('j F Y')}}</p>
            <p>{{ Str::limit($news->content, 200) }}</p>
            @if ($news->img_path)
                <img src="{{ Storage::url($news->img_path) }}" alt="{{ $news->title }}" width="200">
            @endif
            <p>Published: {{ $news->is_published ? 'Yes' : 'No' }}</p>
        </div>
        <br>
        <div>
            <a href="{{ route('admin.news.index') }}"
               class="btn btn-light table-crud-btn"
               role="button">
                <img src="/img/admin_icons/crud_img/ArrowBack.svg" alt="">
                <span>Back</span>
            </a>
        </div>
    </div>
@include('layouts.admin.footer')
