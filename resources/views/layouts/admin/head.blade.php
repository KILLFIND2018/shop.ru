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
                    <div class="dashboard-item"><a class = "nav-admin {{ Request::routeIs('admin')  ? 'active' : ''}}" href="{{ route('admin') }}"><img src="/img/admin_icons/DashboardOutlined.svg" alt="">Dashboard</a></div>
                    <div class="dashboard-item"><a class = "nav-admin {{ Request::routeIs('admin.news.index') || Request::routeIs('admin.news.create') || Request::routeIs('admin.news.edit') || Request::routeIs('admin.news.show') ? 'active' : ''}}" href="{{ route('admin.news.index') }}"><img src="/img/admin_icons/Newspaper.svg" alt="">Новости</a></div>
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
