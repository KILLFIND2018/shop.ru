@include('layouts.head')
@include('layouts.mainmenu')

<div class="worktime-header">
    <h1>{{ $title}}</h1>
</div>
<div class="worktime-items">
    <div class="worktime-item">
        <img src="/img/worktime/img-laptop-site.svg" class="card-img-top">
        <h2>Заказы на сайте принимаются круглосуточно, 7 дней в неделю</h2>
    </div>
    <div class="worktime-item">
        <img src="/img/worktime/img-phone-site.svg" class="card-img-top">
        <h2>График работы операторов</h2>
        <p>
            Понедельник — пятница с 10:00 до 19:00 (Мск)
            <br><br>
            Суббота с 11:00 до 17:00 (Мск)
            <br><br>
            Воскресенье — выходной
        </p>
    </div>
    <div class="worktime-item">
        <img src="/img/worktime/img-delivery-box.svg" class="card-img-top">
        <h2>График работы служб доставки</h2>
        <p>
            <span>Москва</span><br>
            Понедельник–пятница с 10:00 до 22:00<br>
            Суббота, воскресенье с 10:00 до 18:00<br>
            <br><br>
            <span>Санкт-Петербург</span><br>
            Понедельник–воскресенье с 10:00 до 18:00<br>
            <br><br>
            <span>Россия</span><br>
            Понедельник–воскресенье с 10:00 до 18:00<br>
        </p>
    </div>
</div>



</div>

@include('layouts.footer')
