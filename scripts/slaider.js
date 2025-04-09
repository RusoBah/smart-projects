document.addEventListener('DOMContentLoaded', () => {
  const slider = document.querySelector('.gallery-slider');
  const prevBtn = document.querySelector('.gallery-prev');
  const nextBtn = document.querySelector('.gallery-next');
  const elements = document.querySelectorAll('.gallery-element');
  // ширина элемента + gap
  const elementWidth = elements[0].offsetWidth + 20; 
  let currentPosition = 0;
  // сколько элементов видно одновременно
  const visibleElements = 3;
  const maxPosition = -(elements.length - visibleElements) * elementWidth;

  nextBtn.addEventListener('click', () => {
    if (currentPosition > maxPosition){
      currentPosition -= elementWidth;
      slider.style.transform = `translateX(${currentPosition}px)`;
    }
  });

  prevBtn.addEventListener('click', () => {
    if (currentPosition < 0) {
      currentPosition += elementWidth;
      slider.style.transform = `translateX(${currentPosition}px)`;
    }
  });

});