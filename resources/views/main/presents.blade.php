@include('layouts.head')
@include('layouts.mainmenu')

<div class="presents-header">
    <h1>{{ $title}}</h1>
</div>
<div class="presents-items">
    <h3>Мы дарим подарки каждому покупателю — при заказе на сумму от 3000 ₽.</h3>
    <br>
    <div class="presents-item">
        Подарок    1
    </div>
    <div class="presents-item">
        Подарок 2
    </div>
    <div class="presents-item">
        Подарок    1
    </div>
    <div class="presents-item">
        Подарок 2
    </div>
</div>


@include('layouts.footer')
