    <div class="footer">
        <ul class="menu-footer">
          <li class="footer-menu-item">
            <a class="footer-menu-link-active" aria-current="page" href="#">О магазине</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('contacts') }}">Контакты</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('new') }}">Новинки</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('sale') }}">Распродажа</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('discounts') }}">Скидки</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('promo') }}">Акции</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('presents') }}">Подарки</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('brends') }}">Бренды</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="#">Купоны за активность</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="#">Подарочные сертификаты</a>
          </li>
        </ul>
        <ul class="menu-footer">
          <li class="footer-menu-item">
            <a class="footer-menu-link-active" aria-current="page" href="#">Парфюмерия</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('parfum_women') }}">Для женщин</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('parfum_men') }}">Для мужчин</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('parfum_unisex') }}">Унисекс</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('parfumers') }}">Парфюмеры</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="#">Ноты</a>
          </li>
        </ul>
        <ul class="menu-footer">
          <li class="footer-menu-item">
            <a class="footer-menu-link-active" aria-current="page" href="#">Уходовая косметика</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('care_women') }}">Для женщин</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('care_men') }}">Для мужчин</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('care_unisex') }}">Унисекс</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('cosmetic') }}">Косметика</a>
          </li>
        </ul>
        <ul class="menu-footer">
          <li class="footer-menu-item">
            <a class="footer-menu-link-active" aria-current="page" href="#">Информация</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="#">Отзывы</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="#">Новости</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="#">Статьи</a>
          </li>
        </ul>
        <ul class="menu-footer">
          <li class="footer-menu-item">
            <a class="footer-menu-link-active" aria-current="page" href="#">Помощь</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('payment') }}">Оплата</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('delivery') }}">Доставка</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('refund') }}">Возврат</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('worktime') }}">График работы</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('sitemap') }}">Карта сайта</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('rules') }}">Политика конфидециальности</a>
          </li>
          <li class="footer-menu-item">
            <a class="footer-menu-link" href="{{ route('offer') }}">Договор оферты</a>
          </li>
        </ul>
      </div>
      <div class="feedback">
        <h3>Связь с нами</h3>
        8-495-888-88-88
        <br>
        8-800-123-45-56
        <br>
        info@shop.ru
      </div>
      <div class="social-header">
        <h3>Мессенджеры</h3>
      </div>
      <div class="social">
        <a href="http://" class="social-link"><img class = "social" src="/img/social/vk.svg" alt="">Группа в ВК</a>
        <a href="http://" class="social-link"><img class = "social" src="/img/social/tg.svg" alt="">Telegram-канал</a>
        <a href="http://" class="social-link"><img class = "social" src="/img/social/tg.svg" alt="">Telegram-бот</a>
      </div>
      <div class="footer-dev">Магазин Shop.ru 2025г</div>
    </div>
</div>
<script>
    document.querySelectorAll('.selector-link').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          const offset = 100; // Высота вашего меню
          const targetPosition = targetElement.offsetTop - offset;
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
          // Обновляем URL (опционально)
          history.pushState(null, null, targetId);
        }
      });
    });
    </script>
<script src={{ asset('js/sub_menu.js') }}></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</body>

</html>
