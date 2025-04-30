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
        <div class="delivery-lists">
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/delivery.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Курьерская доставка</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 1 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/sdek.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>СДЭК</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 1 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/5post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>5Post</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 1 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Почта России</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 1 день</span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="spb" class="carousel slide" data-bs-ride="carousel">
        <div class="delivery-lists">
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/delivery.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Курьерская доставка</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 2 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/sdek.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>СДЭК</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 2 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/5post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>5Post</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 2 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Почта России</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 2 день</span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="nnov" class="carousel slide" data-bs-ride="carousel">
        <div class="delivery-lists">
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/delivery.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Курьерская доставка</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 10 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/sdek.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>СДЭК</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 10 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/5post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>5Post</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 10 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Почта России</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 8 день</span></p>
                </div>
            </div>
        </div>
    </div>
    <div id="krd" class="carousel slide" data-bs-ride="carousel">
        <div class="delivery-lists">
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/delivery.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Курьерская доставка</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 8 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/sdek.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>СДЭК</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 7 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/5post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>5Post</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 3 день</span></p>
                </div>
            </div>
            <div class="delivery-list">
                <div class="delivery_top">
                    <div class="delivery_top_img">
                        <img src="/img/delivery/post.svg" alt="">
                    </div>
                    <div class="delivery-top-text">
                        <h3>Почта России</h3>
                        <h2>Бесплатно</h2>
                    </div>
                </div>
                <div class="delivery-main">
                    <p>Срок доставки: <span> 4 день</span></p>
                </div>
            </div>
        </div>
    </div>

  </div>

</div>

@include('layouts.footer')
