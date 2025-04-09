<div class="care-header">
    <h1>{{ $title}}</h1>
</div>
<div class="care-menu-container">
    <div class="care-menu">
        <ul class="care-menu">
            <li><a class="sub-nav-link {{ Request::routeIs('care') ? 'active' : ''}}" href="{{ route('care') }}">Все</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('care_men') ? 'active' : ''}}" href="{{ route('care_men') }}">Мужские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('care_women') ? 'active' : ''}}" href="{{ route('care_women') }}">Женские</a></li>
            <li><a class="sub-nav-link {{ Request::routeIs('care_unisex') ? 'active' : ''}}" href="{{ route('care_unisex') }}">Унисекс</a></li>
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
