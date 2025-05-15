function toggleMenu() {
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
  }
  
const slidesContainer = document.querySelector('.slides');
  const slides = document.querySelectorAll('.slide');
  const slideWidth = slides[0].offsetWidth + 12; 
  let currentIndex = 0;

  function slideNext() {
    currentIndex++;
   
    const visibleSlidesCount = Math.floor(750 / slideWidth);
    if (currentIndex > slides.length - visibleSlidesCount) {
      currentIndex = 0;
    }
    slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  setInterval(slideNext, 4000); 