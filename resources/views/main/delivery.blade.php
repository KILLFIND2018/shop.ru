@include('layouts.head')
@include('layouts.mainmenu')

<div class="delivery-header">
    <h1>{{ $title}}</h1>
</div>

<div class="delivery-items">
    <div class="delivery-item">
        <img src="/img/delivery/cover-page-delivery.svg" class="card-img-top delivery">
    </div>
    Чтобы узнать варианты и стоимость доставки нашей продукции, начните вводить название вашего населенного пункта
</div>

<div class="hits-menu">
    <ul class="menu">
      <li class="menu-item">
        <a class="menu-link active" data-target="msk">Москва</a>
      </li>
      <li class="menu-item">
        <a class="menu-link" data-target="spb">Санкт-Петербург</a>
      </li>
      <li class="menu-item">
        <a class="menu-link" data-target="nnov">Нижний Новгород</a>
      </li>
      <li class="menu-item">
        <a class="menu-link" data-target="krd">Краснодар</a>
      </li>


    </ul>
    <div id="msk" class="carousel slide show" data-bs-ride="carousel">
        msc
    </div>
    <div id="spb" class="carousel slide" data-bs-ride="carousel">
        spb
    </div>
    <div id="nnov" class="carousel slide" data-bs-ride="carousel">
        nnov
    </div>
    <div id="krd" class="carousel slide" data-bs-ride="carousel">
        krd
    </div>

  </div>

</div>

@include('layouts.footer')
