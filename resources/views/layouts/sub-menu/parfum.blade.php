<div class="parfum-header">
    <h1>{{ $title}}</h1>
</div>
<div class="parfum-menu-container">
    <div class="parfum-menu">
        <ul class="parfum-menu">
            <li><a class="sub-nav-link {{ Request::routeIs('parfum') ? 'active' : ''}}" href="{{ route('parfum') }}">Все</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('parfum_men') ? 'active' : ''}}" href="{{ route('parfum_men') }}">Мужские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('parfum_women') ? 'active' : ''}}" href="{{ route('parfum_women') }}">Женские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('parfum_unisex') ? 'active' : ''}}" href="{{ route('parfum_unisex') }}">Унисекс</a></li>
        </ul>
    </div>

    <div class="controls-show">
        <div class="dropdown">
            <button id = "filter" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Дата добавления
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">По алфавиту</a></li>
                <li><a class="dropdown-item" href="#">Дата добавления</a></li>
                <li><a class="dropdown-item" href="#">Хиты продаж</a></li>
                <li><a class="dropdown-item" href="#">Высокий рейтинг</a></li>
                <li><a class="dropdown-item" href="#">Топ в избранном</a></li>
                <li><a class="dropdown-item" href="#">Большие скидки</a></li>
                <li><a class="dropdown-item" href="#">Дешевле</a></li>
                <li><a class="dropdown-item" href="#">Дороже</a></li>
            </ul>
        </div>

    </div>
</div>
