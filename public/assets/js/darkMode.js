let darkMode = document.querySelector('.darkMode');
let body = document.querySelector('body')

if(document.cookie.split('; ').includes('displayMode=1') || document.cookie.split('; ').includes(' displayMode=1')) {
    body.classList.add('dark');
}

darkMode.addEventListener('click', () => {
    if(document.cookie.split('; ').includes('displayMode=1')  || document.cookie.split('; ').includes(' displayMode=1')) {
        document.cookie = 'displayMode=0';
    } else {
        document.cookie = 'displayMode=1';
    }
    body.classList.toggle('dark');
})