////////////////////////////// navbar color change when scroll //////////////////////////////

var nav = document.getElementById('nav');

var navHeight = nav.offsetTop;


window.addEventListener('scroll', () =>{
  if(window.scrollY > navHeight){
    nav.style.background = 'black';
  }
  
  if(window.scrollY == 0){
    nav.style.background = 'linear-gradient(rgba(206, 205, 205, 0.5), rgba(204, 204, 204, 0.5)),url(https://img.freepik.com/premium-photo/beautiful-girl-treated-teeth_88340-5103.jpg?w=740)';
    nav.style.backgroundRepeat = 'no-repeat';
    nav.style.backgroundPosition = 'top';
    nav.style.backgroundSize = 'cover';
  }
})



// visible when scroll
document.addEventListener("scroll", () => {
  const reveals = document.querySelectorAll('.reveal');

  reveals.forEach((reveal) => {
    const top = reveal.getBoundingClientRect().top;
    if (top < window.innerHeight) {
      reveal.classList.add('active');
    }
  });
});