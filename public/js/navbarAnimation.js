document.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const navbarToggler = document.querySelector('.navbar-toggler');
    if (window.scrollY > 150) {
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('scrolled');
        navbarToggler.classList.add('bg-light')
    } else {
        navbar.classList.remove('scrolled');
        navbarToggler.classList.remove('bg-light')
    }
});