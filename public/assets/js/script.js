const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];
const mainMenu = document.getElementById('mainPage');

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})