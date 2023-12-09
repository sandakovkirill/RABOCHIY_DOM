let contactButton = document.querySelector('.our-contacts-button');
let getClassMenu = document.querySelector('.communications_list');

contactButton.addEventListener('click', function() {
    if (getClassMenu.classList.contains('display-block')) {
        getClassMenu.classList.remove('display-block');
        getClassMenu.classList.add('display-none');
    } else {
        getClassMenu.classList.remove('display-none');
        getClassMenu.classList.add('display-block');
    }
});

let getButtonHamburger = document.querySelector('.button-hamburger');
let getElementMenu = document.querySelector('.menu');

getButtonHamburger.addEventListener('click', function() {
    if (getElementMenu.classList.contains('display-block')) {
        getElementMenu.classList.remove('display-block');
        getElementMenu.classList.add('display-none');
    } else {
        getElementMenu.classList.remove('display-none');
        getElementMenu.classList.add('display-block');
    }
});
