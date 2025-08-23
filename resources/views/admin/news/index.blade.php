@include('layouts.admin.head')

<div class="main-container">
    <h1>Управление новостями</h1>
    <br>
    <br>
    <a href="{{ route('admin.news.create') }}"
       class="btn btn-light table-crud-btn"
       role="button"
       aria-label="Create new news item">
        <img src="/img/admin_icons/crud_img/Plus.svg" alt="">
        <span>Create</span>
    </a>

    <br>
    <br>
    <div class="news-table">
        <table class = "news-crud">
            <tr>
            <th>Дата</th>
            <th>Status</th>
            <th>Title</th>
            <th>Actions</th>
            </tr>

            @forelse ($news as $item)
                <tr>
                    <td class = "info-td">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j F Y')}}</td>
                    <td class = "info-td">
                        <input type="checkbox" {{ $item->is_published ? 'checked' : '' }} disabled>
                    </td>
                    <td class = "info-td">{{ $item->title }}</td>
                    <td class = "editor">
                        <a href="{{route('admin.news.show', $item->id)}}"
                           class="btn btn-light table-crud-btn"
                           role="button">
                            <img src="/img/admin_icons/crud_img/Eye.svg" alt="">
                            <span>Preview</span>
                        </a>
                        <a href="{{route('admin.news.edit', $item->id)}}"
                           class="btn btn-light table-crud-btn"
                           role="button">
                            <img src="/img/admin_icons/crud_img/Edit.svg" alt="">
                            <span>Edit</span>
                        </a>

                        <button type="button" class="btn btn-light table-crud-btn"><img src="/img/admin_icons/crud_img/Delete.svg" alt="">Delete</button>
                    </td>
                </tr>

            @empty
                <p>No news available.</p>
            @endforelse

        </table>
    </div>
</div>
@include('layouts.admin.footer')
