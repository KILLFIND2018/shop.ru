document.querySelectorAll('.menu-link').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      // Удаляем активные классы
      document.querySelectorAll('.menu-link.active, .carousel.show')
        .forEach(el => el.classList.remove('active', 'show'));

      // Добавляем активные классы
      this.classList.add('active');
      const target = document.getElementById(this.dataset.target);
      if (target) target.classList.add('show');

      // Инициализируем карусель при первом показе
      if (target && !target.classList.contains('initialized')) {
        new bootstrap.Carousel(target);
        target.classList.add('initialized');
      }
    });
});
