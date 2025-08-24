@include('layouts.admin.head')
    <div class="main-container">
        <form action="{{ route('admin.news.update', $news->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            @if($news->img_path)
                <div class="form-group">
                    <label>Current Image</label>
                    <img src="{{ asset('storage/' . $news->img_path) }}" alt="Current Image" style="max-width: 200px;">
                </div>
            @endif
            <div class="form-group">
                <label for="img_path">Image</label>
                <input type="file" class="form-control" id="img_path" name="img_path">
                @error('img_path')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title', $news->title) }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- Аналогично для остальных полей -->
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $news->date) }}">
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" placeholder="Content">{{ old('content', $news->content) }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="is_published">Published</label>
                <input type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
                @error('is_published')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>
@include('layouts.admin.footer')
