@include('layouts.admin.head')

<div class="main-container">
    <h1>Управление новостями</h1>
    <br>
    <br>
    <button type="button" class="btn btn-light table-crud-btn"><img src="/img/admin_icons/crud_img/Plus.svg" alt="">Create</button>
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
                        <button type="button" class="btn btn-light table-crud-btn"><img src="/img/admin_icons/crud_img/Eye.svg" alt="">Preview</button>
                        <button type="button" class="btn btn-light table-crud-btn"><img src="/img/admin_icons/crud_img/Edit.svg" alt="">Edit</button>
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
