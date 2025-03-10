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
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>