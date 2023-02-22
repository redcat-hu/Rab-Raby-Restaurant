console.log("teszt");

const navEL = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY >= 56) {
        navEL.classList.add('navbar-scroll');
        navEL.classList.remove('navbar-dark');
        navEL.classList.add('navbar-light');
    } else if (window.scrollY < 56) {
        navEL.classList.remove('navbar-scroll');
        navEL.classList.add('navbar-dark');
        navEL.classList.remove('navbar-light');
    }
});