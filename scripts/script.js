const navBtn = document.querySelector('.nav-button');
const navMenu = document.querySelector('.nav-menu');
const infoDisable = document.querySelector('.info-disable');

navBtn.addEventListener('click', function() {
  navMenu.classList.toggle('active');
  infoDisable.style.display = 'none';
  if (navMenu.classList.contains('active')) {
    navBtn.textContent = 'ЗАКРЫТЬ';
  } else {
    infoDisable.style.display = 'block';
    navBtn.textContent = 'МЕНЮ';
  }
})




window.addEventListener('scroll', function() {
  if (document.body.classList.contains('no-animation')) return;

 
  const wrappers = document.querySelectorAll('.content-benefit-wrapper');
  const windowHeight = window.innerHeight;

  wrappers.forEach(wrapper => {
    const whiteBlock = wrapper.querySelector('.block-white');
    const blueBlock = wrapper.querySelector('.block-blue');

    const wrapperRect = wrapper.getBoundingClientRect();
    if(window.innerWidth > 1240){

      if (wrapperRect.top <= windowHeight / 2 && wrapperRect.top >= 0) {
        whiteBlock.classList.add('slide-left');
        blueBlock.classList.add('slide-right');
      } else {
        whiteBlock.classList.remove('slide-left');
        blueBlock.classList.remove('slide-right');
      }
    }
  });
  

});