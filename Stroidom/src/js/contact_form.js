let getTaglineButton = document.querySelector('.tagline-button');
let getFormContainer = document.querySelector('.form-container');

getTaglineButton.addEventListener('click', function() {
    if (getFormContainer.classList.contains('display-flex')) {
        getFormContainer.classList.remove('display-flex');
        getFormContainer.classList.add('display-none');
    } else {
        getFormContainer.classList.remove('display-none');
        getFormContainer.classList.add('display-flex');
    }
});