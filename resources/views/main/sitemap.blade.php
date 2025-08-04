@include('layouts.head')
@include('layouts.mainmenu')

<div class="sitemap-header">
    <h1>{{ $title}}</h1>
</div>
<div class="sitemap-items">
    <div class="sitemap-item">
        <ul>
            <li><a href="{{ route('index') }}">Главная страница</a></li>
            <li>
                <a href="{{ route('new') }}">Новинки</a>
                <ul>
                    <li><a href="{{ route('new_women') }}">Женская</a></li>
                    <li><a href="{{ route('new_men') }}">Мужская</a></li>
                    <li><a href="{{ route('new_unisex') }}">Унисекс</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('parfum') }}">Парфюмерия</a>
                <ul>
                    <li><a href="{{ route('parfum_women') }}">Женская</a></li>
                    <li><a href="{{ route('parfum_men') }}">Мужская</a></li>
                    <li><a href="{{ route('parfum_unisex') }}">Унисекс</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('care') }}">Уход</a>
                <ul>
                    <li><a href="{{ route('care_women') }}">Женская</a></li>
                    <li><a href="{{ route('care_men') }}">Мужская</a></li>
                    <li><a href="{{ route('care_unisex') }}">Унисекс</a></li>
                </ul>
            </li>
            <li><a href="{{ route('cosmetic') }}">Косметика</a></li>
            <li>
                <a href="{{ route('sale') }}">Распродажа</a>
                <ul>
                    <li><a href="{{ route('care_women') }}">Женская</a></li>
                    <li><a href="{{ route('care_men') }}">Мужская</a></li>
                    <li><a href="{{ route('care_unisex') }}">Унисекс</a></li>
                </ul>
            </li>
            <li><a href="{{ route('brends') }}">Бренды</a></li>
            <li><a href="{{ route('notes') }}">Ноты</a></li>
        </ul>
    </div>
    <div class="sitemap-item">
        <ul>
            <li><a href="{{ route('parfumers') }}">Парфюмеры</a></li>
            <li><a href="{{ route('about') }}">О магазине</a></li>
            <li><a href="{{ route('news') }}">Новости</a></li>
            <li><a href="{{ route('delivery') }}">Доставка</a></li>
            <li><a href="{{ route('payment') }}">Оплата</a></li>
            <li><a href="{{ route('discounts') }}">Скидки</a></li>
            <li><a href="{{ route('promo') }}">Акции</a></li>
            <li><a href="{{ route('contacts') }}">Контакты</a></li>
            <li><a href="{{ route('presents') }}">Подарки</a></li>
            <li><a href="{{ route('worktime') }}">График работы</a></li>
            <li><a href="{{ route('refund') }}">Возврат</a></li>
            <li><a href="{{ route('rules') }}">Политика конфедициальности</a></li>

        </ul>
    </div>
</div>



</div>

@include('layouts.footer')
