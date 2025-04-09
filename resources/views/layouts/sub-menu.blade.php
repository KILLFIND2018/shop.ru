<div class="new-header">
    <h1>Новинки парфюмерии и косметики</h1>
</div>
<div class="new-menu-container">
    <div class="new-menu">
        <ul class="new-menu">
            <li><a class="sub-nav-link {{ Request::routeIs('new') ? 'active' : ''}}" href="{{ route('new') }}">Все</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('new_men') ? 'active' : ''}}" href="{{ route('new_men') }}">Мужские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('new_women') ? 'active' : ''}}" href="{{ route('new_women') }}">Женские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('new_unisex') ? 'active' : ''}}" href="{{ route('new_unisex') }}">Унисекс</a></li>
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
