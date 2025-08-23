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
        <h3>Active News</h3>
        <table class="news-crud">
            <tr>
                <th>Дата</th>
                <th>Status</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
            @forelse ($news as $item)
                <tr>
                    <td class="info-td">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j F Y') }}</td>
                    <td class="info-td">
                        <input type="checkbox" {{ $item->is_published ? 'checked' : '' }} disabled>
                    </td>
                    <td class="info-td">{{ $item->title }}</td>
                    <td class="editor">
                        <a href="{{ route('admin.news.show', $item->id) }}"
                           class="btn btn-light table-crud-btn"
                           role="button">
                            <img src="/img/admin_icons/crud_img/Eye.svg" alt="">
                            <span>Preview</span>
                        </a>
                        <a href="{{ route('admin.news.edit', $item->id) }}"
                           class="btn btn-light table-crud-btn"
                           role="button">
                            <img src="/img/admin_icons/crud_img/Edit.svg" alt="">
                            <span>Edit</span>
                        </a>
                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light table-crud-btn" onclick="return confirm('Are you sure you want to move this news to trash?')">
                                <img src="/img/admin_icons/crud_img/Delete.svg" alt="">
                                <span>Delete</span>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No active news available.</td>
                </tr>
            @endforelse
        </table>
        {{ $news->links() }} <!-- Пагинация для активных новостей -->
    </div>

    <br>
    <div class="news-table">
        <h3>Trashed News</h3>
        <table class="news-crud">
            <tr>
                <th>Дата</th>
                <th>Title</th>
                <th>Deleted At</th>
                <th>Actions</th>
            </tr>
            @forelse ($trashedNews as $item)
                <tr>
                    <td class="info-td">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j F Y') }}</td>
                    <td class="info-td">{{ $item->title }}</td>
                    <td class="info-td">{{ \Carbon\Carbon::parse($item->deleted_at)->translatedFormat('j F Y, H:i') }}</td>
                    <td class="editor">
                        <form action="{{ route('admin.news.restore', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-light table-crud-btn" onclick="return confirm('Are you sure you want to restore this news?')">
                                <img src="/img/admin_icons/crud_img/TrashRestore.svg" alt=""> <!-- Замените на ваш иконку -->
                                <span>Restore</span>
                            </button>
                        </form>
                        <form action="{{ route('admin.news.forceDestroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light table-crud-btn" onclick="return confirm('Are you sure you want to permanently delete this news?')">
                                <img src="/img/admin_icons/crud_img/Delete.svg" alt="">
                                <span>Force Delete</span>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No trashed news available.</td>
                </tr>
            @endforelse
        </table>
        {{ $trashedNews->links() }} <!-- Пагинация для удалённых новостей -->
    </div>
</div>
@include('layouts.admin.footer')
