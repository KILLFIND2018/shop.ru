<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="admin-page">
        <div class="header">
            <div class="logo-header"><h1>Admin Panel</h1></div>
            <div class="bar-header"><a href=""><img class = "admin_icons" src="/img/admin_icons/LogoutSolid.svg" alt="">Logout</a></div>
        </div>
        <div class="container">
            <div class="menu-bar">
                <div class="user-container">
                    <h3>UserName</h3>
                    <br>
                    <div class="user-links">
                        <a href=""><img class = "admin_icons" src="/img/admin_icons/Account.svg" alt="">Мой профиль</a>
                        <a href=""><img class = "admin_icons" src="/img/admin_icons/LogoutSolid.svg" alt="">Logout</a>
                    </div>

                </div>
                <div class="dashboard-container">
                    <div class="dashboard-item"><a href=""><img src="/img/admin_icons/DashboardOutlined.svg" alt="">Dashboard</a></div>
                    <div class="dashboard-item"><a href=""><img src="/img/admin_icons/Newspaper.svg" alt="">Новости</a></div>
                    <div class="dashboard-item"><a href=""><img src="/img/admin_icons/ArticlesRtl.svg" alt="">Статьи</a></div>
                    <div class="dashboard-item"><a href=""><img src="/img/admin_icons/Review.svg" alt="">Отзывы</a></div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dashboard-item" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/img/admin_icons/AppMarket.svg" alt="">Товары
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Категории</a></li>
                            <li><a class="dropdown-item" href="#">Типы</a></li>
                            <li><a class="dropdown-item" href="#">Списки</a></li>
                        </ul>
                    </div>

                </div>
            </div>
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

        </div>
        <div class="footer">footer</div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

