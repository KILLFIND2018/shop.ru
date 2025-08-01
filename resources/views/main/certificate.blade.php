@include('layouts.head')
@include('layouts.mainmenu')
<div class="certificate-header">
    <h1>{{ $title}}</h1>
</div>
<div class="certificate-items">
    <div class="certificate-item">
        <a href="/dolche-gabbana" class="promo-link">
            <img src="/img/promo/1.png" class="img-thumbnail" alt="Dolche & Gabbana">
            <div class="promo-block">
                <h4>Скидка 25% на бренд Dolche & Gabbana</h4>
            </div>
        </a>
    </div>
    <div class="certificate-item">
        <a href="/aroma-promo" class="promo-link">
            <img src="/img/promo/2.png" class="img-thumbnail" alt="AROMA Promo">
            <div class="promo-block">
                <h4>По промокоду AROMAFEST получи скидку на 8 %</h4>
            </div>
        </a>
    </div>
    <div class="certificate-item">
        <a href="/brand3" class="promo-link">
            <img src="/img/promo/3.png" class="img-thumbnail" alt="Brand 3">
            <div class="promo-block">
                <h4>Скидка 25% на Brend 3</h4>
            </div>
        </a>
    </div>
    <div class="certificate-item">
        <a href="/brand5" class="promo-link">
            <img src="/img/promo/4.png" class="img-thumbnail" alt="Brand 5">
            <div class="promo-block">
                <h4>Скидка 28% на Brend 5</h4>
            </div>
        </a>
    </div>
</div>
@include('layouts.footer')
