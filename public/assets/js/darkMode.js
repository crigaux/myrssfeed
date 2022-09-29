let darkMode = document.querySelector('.darkMode');
let body = document.querySelector('body')

if(document.cookie[12] == 1) {
    body.classList.toggle('dark');
}

darkMode.addEventListener('click', () => {
    if(document.cookie[12] == 1) {
        document.cookie[12] = 0;
        console.log(document.cookie[12]);
    } else {
        document.cookie[12] = 1;
    }
    body.classList.toggle('dark');
})

console.log(document.cookie);