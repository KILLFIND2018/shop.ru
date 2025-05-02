@include('layouts.head')
@include('layouts.mainmenu')

<div class="sitemap-header">
    <h1>{{ $title}}</h1>
</div>
<div class="sitemap-items">
    <div class="sitemap-item">
        <ul>
            <li><a href="">Главная страница</a></li>
            <li>
                <a href="">Новинки</a>
                <ul>
                    <li><a href="">Женская</a></li>
                    <li><a href="">Мужская</a></li>
                    <li><a href="">Унисекс</a></li>
                </ul>
            </li>
            <li>
                <a href="">Парфюмерия</a>
                <ul>
                    <li><a href="">Женская</a></li>
                    <li><a href="">Мужская</a></li>
                    <li><a href="">Унисекс</a></li>
                </ul>
            </li>
            <li>
                <a href="">Уход</a>
                <ul>
                    <li><a href="">Женская</a></li>
                    <li><a href="">Мужская</a></li>
                    <li><a href="">Унисекс</a></li>
                </ul>
            </li>
            <li><a href="">Косметика</a></li>
            <li>
                <a href="">Распродажа</a>
                <ul>
                    <li><a href="">Женская</a></li>
                    <li><a href="">Мужская</a></li>
                    <li><a href="">Унисекс</a></li>
                </ul>
            </li>
            <li><a href="">Бренды</a></li>
            <li><a href="">Ноты</a></li>
        </ul>
    </div>
    <div class="sitemap-item">
        <ul>
            <li><a href="">Парфюмеры</a></li>
            <li><a href="">О магазине</a></li>
            <li><a href="">Новости</a></li>
            <li><a href="">Доставка</a></li>
            <li><a href="">Оплата</a></li>
            <li><a href="">Скидки</a></li>
            <li><a href="">Акции</a></li>
            <li><a href="">Контакты</a></li>
            <li><a href="">Подарки</a></li>
            <li><a href="">График работы</a></li>
            <li><a href="">Возврат</a></li>
            <li><a href="">Политика конфедициальности</a></li>

        </ul>
    </div>
</div>



</div>

@include('layouts.footer')
