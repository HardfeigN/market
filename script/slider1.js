var slideIndex = 1;

$(document).ready(function () {
    let timerId = setInterval(() => changeSlide(), 5000);
});

function changeSlide() {
  slideIndex++;
  if(slideIndex==6) slideIndex=1;
  var s = 'url(images/'+ slideIndex +'k.jpg) 40vw 40vw / cover';
  $('.block1_img').css('background',s);
  var s = 'url(images/'+ (slideIndex % 2 + 1) +'s.jpg) 40vw 40vw / cover';
  $('.block2_img').css('background',s);
}


