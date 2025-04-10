<div class="sale-header">
    <h1>{{ $title}}</h1>
</div>
<div class="sale-menu-container">
    <div class="sale-menu">
        <ul class="sale-menu">
            <li><a class="sub-nav-link {{ Request::routeIs('sale') ? 'active' : ''}}" href="{{ route('sale') }}">Все</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('sale_men') ? 'active' : ''}}" href="{{ route('sale_men') }}">Мужские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('sale_women') ? 'active' : ''}}" href="{{ route('sale_women') }}">Женские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('sale_unisex') ? 'active' : ''}}" href="{{ route('sale_unisex') }}">Унисекс</a></li>
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
