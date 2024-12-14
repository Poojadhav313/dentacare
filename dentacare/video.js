//////////////////////// video section ////////////////////////
var vid = document.getElementById('vid');

var vidBtn = document.getElementById('video-btn');


vidBtn.addEventListener('click', () => {
  if (vid.paused){
    vid.play();
    vidBtn.innerHTML = "||";
  }
  else{
    vid.pause();
    vidBtn.innerHTML = "▶";
  }
})