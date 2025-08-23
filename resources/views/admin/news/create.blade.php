@include('layouts.admin.head')
    <div class="main-container">
        <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img_path">Image</label>
                <input type="file" class="form-control" id="img_path" name="img_path">
                @error('img_path')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" placeholder="Content">{{ old('content') }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_news">URL News</label>
                <input type="text" class="form-control" id="url_news" name="url_news" placeholder="URL News" value="{{ old('url_news') }}">
                @error('url_news')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="is_published">Published</label>
                <input type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }}>
                @error('is_published')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@include('layouts.admin.footer')
