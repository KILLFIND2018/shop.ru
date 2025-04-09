@include('layouts.head')
@include('layouts.mainmenu')


@include('layouts.sub-menu')


<div class="new-container">
    <div class="filter-block">
        <div class="dropdown filter">
            <!-- Бренд -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#brandCollapse" aria-expanded="false" aria-controls="brandCollapse">
                Бренд
            </button>
            <div class="collapse mb-3" id="brandCollapse">
                <div class="card card-body">
                    Содержимое с информацией о бренде парфюмерии
                </div>
            </div>

            <!-- Назначение -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#purposeCollapse" aria-expanded="false" aria-controls="purposeCollapse">
                Назначение
            </button>
            <div class="collapse mb-3" id="purposeCollapse">
                <div class="card card-body">
                    Описание назначения и случая использования парфюма
                </div>
            </div>

            <!-- Тип -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#typeCollapse" aria-expanded="false" aria-controls="typeCollapse">
                Тип
            </button>
            <div class="collapse mb-3" id="typeCollapse">
                <div class="card card-body">
                    Информация о типе аромата (например: Eau de Parfum, Eau de Toilette)
                </div>
            </div>

            <!-- Объем -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#volumeCollapse" aria-expanded="false" aria-controls="volumeCollapse">
                Объем
            </button>
            <div class="collapse mb-3" id="volumeCollapse">
                <div class="card card-body">
                    Доступные варианты объема флакона
                </div>
            </div>

            <!-- Особенности флакона -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#bottleCollapse" aria-expanded="false" aria-controls="bottleCollapse">
                Особенности флакона
            </button>
            <div class="collapse mb-3" id="bottleCollapse">
                <div class="card card-body">
                    Описание дизайна и особенностей флакона
                </div>
            </div>

            <!-- Страна -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#countryCollapse" aria-expanded="false" aria-controls="countryCollapse">
                Страна
            </button>
            <div class="collapse mb-3" id="countryCollapse">
                <div class="card card-body">
                    Страна-производитель парфюма
                </div>
            </div>

            <!-- Год издания -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#yearCollapse" aria-expanded="false" aria-controls="yearCollapse">
                Год издания
            </button>
            <div class="collapse mb-3" id="yearCollapse">
                <div class="card card-body">
                    Год выпуска аромата
                </div>
            </div>

            <!-- Ноты -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#notesCollapse" aria-expanded="false" aria-controls="notesCollapse">
                Ноты
            </button>
            <div class="collapse mb-3" id="notesCollapse">
                <div class="card card-body">
                    Пирамида аромата: начальные, сердечные и базовые ноты
                </div>
            </div>

            <!-- Цена -->
            <button id = "filter" class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#priceCollapse" aria-expanded="false" aria-controls="priceCollapse">
                Цена
            </button>
            <div class="collapse mb-3" id="priceCollapse">
                <div class="card card-body">
                    Ценовой диапазон и варианты стоимости
                </div>
            </div>

        </div>
    </div>
    <div class="new-items">
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
    </div>


</div>

@include('layouts.footer')
