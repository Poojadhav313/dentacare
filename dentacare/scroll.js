document.addEventListener("DOMContentLoaded", function() {

  const revealElements = document.querySelectorAll('.reveal');

  function scrollAnimation() {
      const windowHeight = window.innerHeight;

      revealElements.forEach((element) => {

          const elementTop = element.getBoundingClientRect().top;

          if (elementTop < windowHeight - 100) {
              element.classList.add('active');
          }
      });
  }

  window.addEventListener('scroll', scrollAnimation);
  scrollAnimation(); 
});

document.addEventListener("DOMContentLoaded", function() {

  const revealElements = document.querySelectorAll('.revealtop');

  function scrollAnimation() {
      const windowHeight = window.innerHeight;

      revealElements.forEach((element) => {

          const elementTop = element.getBoundingClientRect().top;

          if (elementTop < windowHeight - 100) {
              element.classList.add('active');
          }
      });
  }

  window.addEventListener('scroll', scrollAnimation);
  scrollAnimation(); 
});
