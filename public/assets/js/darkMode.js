let darkMode = document.querySelectorAll('.darkModeToggle');
let body = document.querySelector('body')
let moon = document.querySelectorAll('.moon');
let sun = document.querySelectorAll('.sun');

if(document.cookie.split('; ').includes('displayMode=1')) {
    body.classList.add('dark');
    sun.forEach(element => {
        element.style='display:none';
    });
    moon.forEach(element => {
        element.style='display:block';
    });
} else {
    sun.forEach(element => {
        element.style='display:block';
    });
    moon.forEach(element => {
        element.style='display:none';
    });
}

darkMode.forEach(element => {
    element.addEventListener('click', () => {
        if(document.cookie.split('; ').includes('displayMode=1')) {
            document.cookie = 'displayMode=0';
            sun.forEach(element => {
                element.style='display:block';
            });
            moon.forEach(element => {
                element.style='display:none';
            });
        } else {
            document.cookie = 'displayMode=1';
            sun.forEach(element => {
                element.style='display:none';
            });
            moon.forEach(element => {
                element.style='display:block';
            });
        }
        body.classList.toggle('dark');
    })
})