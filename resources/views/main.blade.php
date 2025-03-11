<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Главная</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="main-page">
      <div class="header">
        <div class="locate">
          <h1>Москва</h1>
        </div>
        <div class="finder">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="account">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">
              <a class = "acc-btn" href="#">Вход</a>
            </button>
            <button type="button" class="btn btn-primary">
              <a class = "acc-btn" href="#">Регистрация</a>
            </button>
          </div>
        </div>
        <div class="cart">
          <button type="button" class="btn btn-outline-primary position-relative">
            <i class="bi bi-cart">  Корзина</i> <!-- Иконка корзины -->
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              0 <!-- Количество товаров в корзине -->
              <span class="visually-hidden">товаров в корзине</span>
            </span>
          </button>
        </div>
      </div>
      <div class="header-menu">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGOTIP SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Новинки</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Парфюмерия</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Уход</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Акции</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Распродажа</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Бренды</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div id="carouselIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="sales">
        <div class="sales-header">
          <h1>Акции и предложения</h1>
          <button type="button" class="btn btn-primary">
            <a class = "acc-btn" href="#">Все акции</a>
            <i class="bi bi-arrow-bar-right"></i>
          </button>
        </div>
        <div class="sales-items">
            <div class="cart-item">1</div>
            <div class="cart-item">2</div>
            <div class="cart-item">3</div>
            <div class="cart-item">4</div>
            <div class="cart-item">5</div>
            <div class="cart-item">6</div>
            <div class="cart-item">7</div>
            <div class="cart-item">8</div>
            <div class="cart-item">9</div>
            <div class="cart-item">10</div>
            <div class="cart-item">11</div>
            <div class="cart-item">12</div>
          
        </div>

      </div>
      <div class="header-menu">
          <div class="container-fluid">
            
              <ul class="menu">
                <li class="menu-item">
                  <a class="menu-link active" aria-current="page" href="#">Новинки</a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="#">Парфюмерия</a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="#">Уход</a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="#">Акции</a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="#">Распродажа</a>
                </li>
                <li class="menu-item">
                  <a class="menu-link" href="#">Бренды</a>
                </li>
              </ul>
            </div>
        <div id="hitsCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- Слайды -->
            <div class="carousel-item active">
              <div class="hits-items">
                <div class="hit-item">1</div>
                <div class="hit-item">2</div>
                <div class="hit-item">3</div>
                <div class="hit-item">4</div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">5</div>
                <div class="hit-item">6</div>
                <div class="hit-item">7</div>
                <div class="hit-item">8</div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">9</div>
                <div class="hit-item">10</div>
                <div class="hit-item">11</div>
                <div class="hit-item">12</div>
              </div>
            </div>
          </div>
        
          <!-- Кнопки управления -->
          <button class="carousel-control-prev" type="button" data-bs-target="#hitsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#hitsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>