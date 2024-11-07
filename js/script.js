const navbarNav = document.querySelector('.navbar-nav');

document.querySelector('#Hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

const Hamburger = document.querySelector ('#Hamburger-menu');
document.addEventListener ('click', function(e) {
    if(!Hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
})