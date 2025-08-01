@include('layouts.head')
@include('layouts.mainmenu')

<div class="discount-header">
    <h1>{{ $title}}</h1>
</div>
<div class="discount-items">
    <h3>Накопительные скидки</h3>
    <br>
    <div class="discount-item">
        5%  <span>Продумать дизайн блока и суммы купона с картинкой</span>
    </div>
    <div class="discount-item">
        10%
    </div>
    <div class="discount-item">
        15%
    </div>
    <div class="discount-item">
        20%
    </div>
    <br>
    <br>
    <h3>Разовые скидки</h3>
    <div class="discount-item">
        5%
    </div>
    <div class="discount-item">
        10%
    </div>
    <div class="discount-item">
        15%
    </div>
    <div class="discount-item">
        20%
    </div>
    <br><br>
    <h3>Распродажа</h3>
    <div class="discount-item">
        5%
    </div>
    <div class="discount-item">
        10%
    </div>
    <div class="discount-item">
        15%
    </div>
    <div class="discount-item">
        20%
    </div>
    <br>
    <br>
    <button type="button" class="btn btn-primary">
        <a class="acc-btn" href="#">В распродажу</a>
    </button>
    <br>
</div>


@include('layouts.footer')

