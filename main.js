// Funkcja do otwierania i zamykania menu w wersji mobilnej
function toggleMenu() {
    const navLinks = document.getElementById("navLinks");
    navLinks.classList.toggle("show");

    // Zmiana ikony hamburgera
    const hamburger = document.querySelector(".hamburger");
    hamburger.classList.toggle("change");
}

// Funkcja do przewinięcia strony i zamykania menu
function scrollToSection(targetSectionId) {
    const target = document.getElementById(targetSectionId);
    const headerOffset = document.querySelector('header').offsetHeight;
    const targetOffset = target.offsetTop - headerOffset;
    window.scrollTo({
        top: targetOffset,
        behavior: 'smooth'
    });

    // Zamykanie menu
    const navLinks = document.getElementById("navLinks");
    navLinks.classList.remove('show');
    document.querySelector('.hamburger').classList.remove('change');
}

// Przewijanie do odpowiedniego fragmentu strony po kliknięciu w link
document.querySelectorAll('#navLinks li a').forEach(item => {
    item.addEventListener('click', (event) => {
        event.preventDefault();
        scrollToSection(item.getAttribute('href').substring(1));
    });
});

// Funkcja do zamykania menu po przewinięciu strony
window.addEventListener('scroll', function() {
    const navLinks = document.getElementById("navLinks");
    if (navLinks.classList.contains("show")) {
        navLinks.classList.remove("show");
        document.querySelector('.hamburger').classList.remove('change');
    }
});

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        scrollToSection(this.getAttribute('href').substring(1));
    });
});

// Lightbox
$(document).ready(function() {
    $(".fancybox").fancybox();
});
