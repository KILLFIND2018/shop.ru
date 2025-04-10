<div class="finder">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="account">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">
              <a class="acc-btn" href="#">Вход</a>
            </button>
            <button type="button" class="btn btn-primary">
              <a class="acc-btn" href="#">Регистрация</a>
            </button>
          </div>
        </div>
        <div class="cart">
          <button type="button" class="btn btn-outline-primary position-relative">
            <i class="bi bi-cart"> Корзина</i> <!-- Иконка корзины -->
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
            <a class="navbar-brand" href="{{ route('index') }}">LOGOTIP SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('new') ||  Request::routeIs('new_men') || Request::routeIs('new_women') || Request::routeIs('new_unisex') ? 'active' : ''}}" aria-current="page" href="{{ route('new') }}">Новинки</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('parfum') ||  Request::routeIs('parfum_men') || Request::routeIs('parfum_women') || Request::routeIs('parfum_unisex') ? 'active' : ''}}" href="{{ route('parfum') }}">Парфюмерия</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('care') ||  Request::routeIs('care_men') || Request::routeIs('care_women') || Request::routeIs('care_unisex') ? 'active' : ''}}" href="{{ route('care') }}">Уход</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::routeIs('cosmetic')  ? 'active' : ''}}" href="{{ route('cosmetic') }}">Косметика</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('promo')  ? 'active' : ''}}" href="{{ route('promo') }}">Акции</a>
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
