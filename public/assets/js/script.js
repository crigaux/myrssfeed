const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];
const mainMenu = document.getElementById('mainPage');
const footerPage = document.getElementById('footerPage');


toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})

toggleButton.addEventListener('click', () => {
    if (mainMenu.style.display === 'none'){
        mainMenu.style.display = 'block';
    } 
    if (footerPage.style.display === 'none'){
        footerPage.style.display = 'block';
    }else {
        mainMenu.style.display = 'none';
        footerPage.style.display = 'none';
    }
})

// ############################################################
//               Redirection vers les paramètres
// ############################################################

document.querySelectorAll('.iconSettings').forEach(element => {
    element.addEventListener('click', () => {
        document.location.href = 'http://myrssfeed.localhost/parameters'
    })
})