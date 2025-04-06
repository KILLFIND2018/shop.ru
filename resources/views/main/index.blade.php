@include('layouts.head')
@include('layouts.mainmenu')


      <div id="carouselIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active slide-left">
            <img src="img/1.png" class="d-block w-100" alt="...">
            <div class="main-block">
              <h2>Dolce & Gobbana</h2>
              <p>Попробуй новый аромат</p>
              <button type="submit">Купить</button>
            </div>
          </div>
          <div class="carousel-item slide-right">
            <img src="img/2.png" class="d-block w-100" alt="...">
            <div class="main-block">
              <h2>Новая коллекция</h2> <!-- Пример другого текста -->
              <p>Осенние ароматы</p>
              <button type="submit">Выбрать</button>
            </div>
          </div>
          <div class="carousel-item slide-right">
            <img src="img/3.png" class="d-block w-100" alt="...">
            <div class="main-block">
              <h2>Специальное предложение</h2>
              <p>Скидки до 30%</p>
              <button type="submit">Подробнее</button>
            </div>
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
            <a class="acc-btn" href="#">Все акции</a>
            <i class="bi bi-arrow-bar-right"></i>
          </button>
        </div>
        <div class="sales-items">
          <div class="cart-item">
            <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 1</h2>
              <span>-30%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 2</h2>
              <span>-30%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 3</h2>
              <span>-10%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 4</h2>
              <span>-20%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/5.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 5</h2>
              <span>-50%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/6.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 6</h2>
              <span>-18%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 7</h2>
              <span>-15%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/8.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 8</h2>
              <span>-10%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 9</h2>
              <span>-30%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 10</h2>
              <span>-30%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 11</h2>
              <span>-30%</span>
            </div>
          </div>
          <div class="cart-item">
            <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
            <div class="sales-block">
              <h2>Brend 12</h2>
              <span>-30%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="hits-menu">
        <ul class="menu">
          <li class="menu-item">
            <a class="menu-link active" data-target="hitsCarousel">Новинки</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" data-target="parfumCarousel">Парфюмерия</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" data-target="celectivCarousel">Селектив</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" data-target="promoCarousel">Акции</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" data-target="salesCarousel">Распродажа</a>
          </li>
        </ul>
        <div id="hitsCarousel" class="carousel slide show" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 1 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 25%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 2 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">2000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 5%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 3 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">18000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 45%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 4 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">5000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 85%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 5 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/8.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 6 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 7 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 8 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
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
        <div id="parfumCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 85%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 5 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/8.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 6 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 7 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 8 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Кнопки управления -->
          <button class="carousel-control-prev" type="button" data-bs-target="#parfumCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#parfumCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <div id="celectivCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 85%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 5 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/8.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 6 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 7 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 8 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Кнопки управления -->
          <button class="carousel-control-prev" type="button" data-bs-target="#celectivCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#celectivCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                    <div class="hit-item-badges promo">Промо</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 85%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 5 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/8.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 6 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 7 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 8 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Кнопки управления -->
          <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <div id="salesCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                    <div class="hit-item-badges sale">Распродажа</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 85%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 5 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/8.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 6 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 7 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 8 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="hits-items">
                <div class="hit-item">
                  <img src="/img/parfum/1.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 9 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 10 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/3.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 11 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
                <div class="hit-item">
                  <img src="/img/parfum/4.png" class="img-thumbnail" alt="...">
                  <div class="hit-item-badges">
                    <div class="hit-item-badges discont">Скидка 15%</div>
                    <div class="hit-item-badges new">Новинка</div>
                  </div>
                  <div class="hit-item-stats">
                    <i class="fas fa-star favorite-icon"></i>
                    <i class="fas fa-heart review-icon"></i>
                  </div>
                  <div class="hit-body">
                    <div class="hit-body-header">
                      <h3>Brend 12 <span>Name item</span></h3>
                    </div>
                    <div class="hit-body-price">30000 &#8381;</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Кнопки управления -->
          <button class="carousel-control-prev" type="button" data-bs-target="#salesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#salesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
      <div class="certificate-img">
        <a href="#"><img src="img/4.png" class="img-fluid" alt="..."></a>
      </div>
      <div class="reviews-header">
        <h1>Отзывы наших клиентов</h1>
        <button type="button" class="btn btn-primary">
          <a class="acc-btn" href="#">Все отзывы</a>
          <i class="bi bi-arrow-bar-right"></i>
        </button>
      </div>
      <div class="reviews">
        <div class="reviews-block">
          <a href="#" class="reviews-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <h3>Hermes H22 Herbes Vives</h3>
          </a>
          <p>
            шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            <br>
            <br>
            Иванов Иван иванович
          </p>
        </div>
        <div class="reviews-block">
          <a href="#" class="reviews-link">
            <img src="/img/parfum/8.png" class="img-thumbnail" alt="...">
            <h3>Hermes H22 Herbes Vives</h3>
          </a>
          <p>
            шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            <br>
            <br>
            Иванов Иван иванович
          </p>
        </div>
        <div class="reviews-block">
          <a href="#" class="reviews-link">
            <img src="/img/parfum/2.png" class="img-thumbnail" alt="...">
            <h3>Hermes H22 Herbes Vives</h3>
          </a>
          <p>
            шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            <br>
            <br>
            Иванов Иван иванович
          </p>
        </div>
        <div class="reviews-block">
          <a href="#" class="reviews-link">
            <img src="/img/parfum/6.png" class="img-thumbnail" alt="...">
            <h3>Hermes H22 Herbes Vives</h3>
          </a>
          <p>
            шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            <br>
            <br>
            Иванов Иван иванович
          </p>
        </div>
      </div>
      <div class="news-header">
        <h1>Новости</h1>
        <button type="button" class="btn btn-primary">
          <a class="acc-btn" href="#">Все новости</a>
          <i class="bi bi-arrow-bar-right"></i>
        </button>
      </div>
      <div class="news">
        <div class="news-item">
          <a href="#" class="news-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
        <div class="news-item">
          <a href="#" class="news-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
        <div class="news-item">
          <a href="#" class="news-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
        <div class="news-item">
          <a href="#" class="news-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
      </div>
      <div class="articles-header">
        <h1>Статьи</h1>
        <button type="button" class="btn btn-primary">
          <a class="acc-btn" href="#">Все статьи</a>
          <i class="bi bi-arrow-bar-right"></i>
        </button>
      </div>
      <div class="articles">
        <div class="articels-item">
          <a href="#" class="articles-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
        <div class="articels-item">
          <a href="#" class="articles-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
        <div class="articels-item">
          <a href="#" class="articles-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
        <div class="articels-item">
          <a href="#" class="articles-link">
            <img src="/img/parfum/7.png" class="img-thumbnail" alt="...">
            <p>
              шивмп швпар вазщыа ышоах цукцук цвйцуйуу
            </p>
          </a>
        </div>
      </div>
      <div class="brends-header">
        <h1>Топ бренды</h1>
        <button type="button" class="btn btn-primary">
          <a class="acc-btn" href="#">Все бренды</a>
          <i class="bi bi-arrow-bar-right"></i>
        </button>
      </div>
      <div class="marquee-container">
        <div class="marquee-content">
          <img src="/img/brends/1.png" alt="">
          <img src="/img/brends/2.png" alt="">
          <img src="/img/brends/3.png" alt="">
          <img src="/img/brends/4.png" alt="">
          <img src="/img/brends/5.png" alt="">
          <img src="/img/brends/6.png" alt="">
          <img src="/img/brends/7.png" alt="">
          <img src="/img/brends/8.png" alt="">
          <!-- Дублируем для бесшовной анимации -->
          <img src="/img/brends/1.png" alt="">
          <img src="/img/brends/2.png" alt="">
          <img src="/img/brends/3.png" alt="">
          <img src="/img/brends/4.png" alt="">
          <img src="/img/brends/5.png" alt="">
          <img src="/img/brends/6.png" alt="">
          <img src="/img/brends/7.png" alt="">
          <img src="/img/brends/8.png" alt="">
        </div>
      </div>
      @include('layouts.footer')
