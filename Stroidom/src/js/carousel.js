let buttonCarousel = document.getElementById('href-carousel');
let images = ['slider-1.jpg', 'slider-2.jpg', 'slider-3.jpg'];
let currentIndex = 1;

buttonCarousel.addEventListener('click', function(){
    document.getElementById('slider-img').src = 'img/' + images[currentIndex];
    currentIndex = (currentIndex + 1) % images.length;
});