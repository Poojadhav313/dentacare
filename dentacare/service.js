const track = document.querySelector("#slider-container");

const slides = Array.from(track.children);

const prevBtn = document.querySelector("#prev-btn");
const nextBtn = document.querySelector("#next-btn");

const slideWidth = slides[0].getBoundingClientRect().width;

/////separe all slides side by side

//slides[0].style.left = 0;
slides[1].style.left = slideWidth + "px";

/////next btn
nextBtn.addEventListener('click', nextBtnClick);



function nextBtnClick()
{
  const currentSlide = track.querySelector('.current-slide');
  const nextSlide = currentSlide.nextElementSibling;
  const amountToMove = nextSlide.offsetLeft;
  
  track.style.transform = 'translateX(-' + amountToMove + 'px)';
  currentSlide.classList.remove('current-slide');
  nextSlide.classList.add('current-slide');
}

/////prev btn
prevBtn.addEventListener('click', prevBtnClick);

function prevBtnClick()
{
  const currentSlide = track.querySelector('.current-slide');
  const prevSlide = currentSlide.previousElementSibling;
  const amountToMove = prevSlide.offsetLeft;

  track.style.transform = 'translateX(-' + amountToMove + 'px)';

  currentSlide.classList.remove('current-slide');
  prevSlide.classList.add('current-slide');
}






console.log(slides);