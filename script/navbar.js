window.addEventListener('scroll', function() {
    var navbar = document.getElementById('nav'); // Change 'yourNavbarId' to the actual ID of your navbar element
    var scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > 0) {
        navbar.style.backgroundColor = 'rgb(0 0 0 / 57%)'; // Change background color to black
    } else {
        navbar.style.backgroundColor = 'transparent'; // Make navbar transparent
    }
});
