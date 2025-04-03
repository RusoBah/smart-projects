
window.addEventListener('resize', function() {
  if (window.innerWidth < 1200) {
    document.body.classList.add('no-animation');
  } else {
    document.body.classList.remove('no-animation');
  }
});

window.addEventListener('scroll', function() {
  if (document.body.classList.contains('no-animation')) return;

 
  const wrappers = document.querySelectorAll('.content-benefit-wrapper');
  const windowHeight = window.innerHeight;

  wrappers.forEach(wrapper => {
    const whiteBlock = wrapper.querySelector('.block-white');
    const blueBlock = wrapper.querySelector('.block-blue');

    const wrapperRect = wrapper.getBoundingClientRect();

    if (wrapperRect.top <= windowHeight / 2 && wrapperRect.top >= 0) {
      whiteBlock.classList.add('slide-left');
      blueBlock.classList.add('slide-right');
    } else {
      whiteBlock.classList.remove('slide-left');
      blueBlock.classList.remove('slide-right');
    }
  });
});