window.addEventListener('scroll', function() {
  // Получаем все блоки content-benefit-wrapper
  const wrappers = document.querySelectorAll('.content-benefit-wrapper');
  const windowHeight = window.innerHeight;

  wrappers.forEach(wrapper => {
    // Находим белый и синий блоки внутри каждого wrapper
    const whiteBlock = wrapper.querySelector('.block-white');
    const blueBlock = wrapper.querySelector('.block-blue');

    // Получаем позицию wrapper относительно viewport
    const wrapperRect = wrapper.getBoundingClientRect();

    // Анимация срабатывает, когда верхняя часть wrapper достигает середины экрана
    if (wrapperRect.top <= windowHeight / 2 && wrapperRect.top >= 0) {
      whiteBlock.classList.add('slide-left');
      blueBlock.classList.add('slide-right');
    } else {
      whiteBlock.classList.remove('slide-left');
      blueBlock.classList.remove('slide-right');
    }
  });
});