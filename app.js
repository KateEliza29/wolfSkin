
// Carousel 

const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-slide div');
const prevBtn = document.querySelector('prevBtn');
let counter = 0;
const size = carouselImages[0].clientWidth;


document.getElementById('nextBtn').onclick = function() {
    if (counter >= carouselImages.length -1) return;
    counter++;
    console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size*counter)+'px)';

}

document.getElementById('prevBtn').onclick = function() {
    if (counter <= 0) return;
    counter--;
    console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size*counter)+'px)';
}


// Navbar shrink on scroll. 

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("headerWrapper").style.padding = "0px 10px";
    document.getElementById("headerLogo").style.width = "40px";
  } else {
    document.getElementById("headerWrapper").style.padding = "20px 10px";
    document.getElementById("headerLogo").style.width = "60px";
  }
}
