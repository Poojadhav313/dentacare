var bannerSection = document.getElementById('home-banner-section');

var box1 = document.querySelector('.banner-box-1');
var box2 = document.querySelector('.banner-box-2');
var box3 = document.querySelector('.banner-box-3');
var box4 = document.querySelector('.banner-box-4');

var arrow1 = document.getElementById('arrow-1');
var arrow2 = document.getElementById('arrow-2');
var arrow3 = document.getElementById('arrow-3');
var arrow4 = document.getElementById('arrow-4');


box1.addEventListener('mouseenter', () => {
  arrow1.innerHTML = '&#8594;';
})

box1.addEventListener('mouseleave', () => {
  arrow1.innerHTML = '01';
})


box2.addEventListener('mouseenter', () => {
  bannerSection.style.background = "linear-gradient(rgba(24, 24, 24, 0.5), rgba(24, 24, 24, 0.5)), url('https://img.freepik.com/premium-photo/dentist-shows-artificial-jaw-how-he-drills-tooth-removing-caries-concentrated-dentist-with-jaw-samples-tooth-model-dental-office-professional-dental-clinic_121946-1114.jpg?w=740')";
  bannerSection.style.backgroundSize = "cover";
  bannerSection.style.backgroundPosition = "center";
  //bannerSection.style.transform = "scale(1.1)";

  arrow2.innerHTML = '&#8594;';
});

box2.addEventListener('mouseleave', () => {
  bannerSection.style.background = "";
  //bannerSection.style.transform = "scale(1.0)";

  arrow2.innerHTML = '02';
});

box3.addEventListener('mouseenter', () => {
  bannerSection.style.background = "linear-gradient(rgba(24, 24, 24, 0.5), rgba(24, 24, 24, 0.5)), url('https://img.freepik.com/free-photo/girl-with-braces-routine-dental-examination_329181-17710.jpg?t=st=1734006293~exp=1734009893~hmac=7ecf8485a21abe47a3eabbc35b1a7bc075c473b435c7d2f0e73f1bd25ad241a0&w=740')";
  bannerSection.style.backgroundSize = "cover";
  bannerSection.style.backgroundPosition = "center";

  arrow3.innerHTML = '&#8594;';
});

box3.addEventListener('mouseleave', () => {
  bannerSection.style.background = "";

  arrow3.innerHTML = '03';
});

box4.addEventListener('mouseenter', () => {
  bannerSection.style.background = "linear-gradient(rgba(24, 24, 24, 0.5), rgba(24, 24, 24, 0.5)), url('https://img.freepik.com/free-photo/dentist-holding-variety-teeth_23-2148380318.jpg?t=st=1734006389~exp=1734009989~hmac=a20b22ab688f1be7a66de92227720d0d2ddc8cf5847ff23badb0f9fce2881fb0&w=740')";
  bannerSection.style.backgroundSize = "cover";
  bannerSection.style.backgroundPosition = "center";
  
  arrow4.innerHTML = '&#8594;';
});

box4.addEventListener('mouseleave', () => {
  bannerSection.style.background = "";

  arrow4.innerHTML = '04';
});

// service scroll section

const scrollContainer = document.getElementById('scroll-container');
const boxes = document.querySelectorAll('.box');
let currentIndex = 0; 
const interval = 3000; 

function scrollToBox() {
  const boxWidth = boxes[0].offsetWidth + 20; 
  scrollContainer.scrollTo({
    left: currentIndex * boxWidth,
    behavior: 'smooth',
  });

  currentIndex = (currentIndex + 1) % boxes.length; 
}
setInterval(scrollToBox, interval);