@include('layouts.head')
@include('layouts.mainmenu')

<div class="about-header">
    <h1>{{ $title }}</h1>
</div>
<div class="about-logo">
    <img src="/img/logo.png" alt="">
    <p>Мы работаем на парфюмерном рынке более 15 лет.</p>
    <br>
    <p>Наш интернет-магазин orental.ru будет рад помочь выбрать вам только качественную, оригинальную, парфюмерию и
        уходовую косметику на любой вкус.</p>
</div>
<div class="about-items">
    <div class="about-item">
        <img src="/img/about/img-about-clients.svg" alt="">
        <br>
        <p>За время работы у нас появилось много постоянных клиентов, которыми мы очень дорожим, и делаем все возможное, чтобы они вновь и вновь обращались к нам.</p>
    </div>
    <div class="about-item">
        <img src="/img/about/img-about-choice.svg" alt="">
        <br>
        <p>В нашем магазине представлен большой выбор товаров от самых известных торговых марок мира.</p>
    </div>
    <div class="about-item">
        <img src="/img/about/img-about-discounts.svg" alt="">
        <br>
        <p>Минимальные цены, оригинальная продукция, отличные скидки, акции, бесплатная доставка.</p>
    </div>
</div>

@include('layouts.footer')
