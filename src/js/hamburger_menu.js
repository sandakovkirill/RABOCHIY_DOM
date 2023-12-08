let buttonHamburger = document.getElementsByClassName('button-hamburger')[0];
buttonHamburger.addEventListener('click', function() {
    document.querySelector('.menu').classList.toggle('show');
});