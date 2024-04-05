$(document).ready(function () {
    const container = document.getElementById('primary-container');
    const sections = document.querySelectorAll('#primary .post-cover');
    let currentSection = 0;
    const scrollContainer = document.querySelector(".scrollable-content");
    const bulletsContainer = document.querySelector(".scroll-bullets");
    let scrolling = false;
    const bullets = [];

    sections.forEach((section, index) => {
        const bullet = document.createElement("div");
        bullet.classList.add("bullet");
        bullet.addEventListener("click", () => scrollToSection(index));
        bullets.push(bullet);
        bulletsContainer.appendChild(bullet);
    });

    $('.single .cover-img .videowrap').on('click', function() {
        var video = document.getElementById('playable');
        if (video.paused) { 
            video.play();
            $('.single .cover-img .videowrap').addClass('playing');
        } else {
            video.pause();
            $('.single .cover-img .videowrap').removeClass('playing');
        }
    });

    
    function scrollToSection(index) {
        if (!scrolling && index >= 0 && index < sections.length) {
            scrolling = true;
            currentSection = index;
            updateBulletHighlight();
            if (currentSection < sections.length - 1) {
                sections[currentSection].scrollIntoView({ behavior: 'smooth' });
            } else {
                // Scroll to the footer if the last section is reached
                document.querySelector("footer").scrollIntoView({ behavior: 'smooth' });
            }
            setTimeout(() => {
                scrolling = false;
            }, 1000); // Delay scrolling for 1 second to prevent rapid scrolling
        }
    }
    document.addEventListener('scroll', function() {
        handleHeaderVisibility();
    });
    
    function handleHeaderVisibility() {
        var header = document.querySelector('header');
        var footer = document.querySelector('footer');
    
        // Adjust these values as needed based on your layout
        var headerHeight = header.offsetHeight;
        var footerTop = footer.offsetTop;
    
        // Calculate the scroll position
        var scrollPosition = window.scrollY + headerHeight;
    
        // Check if the scroll position is within the footer
        if (scrollPosition >= footerTop) {
            // Footer is in view, add the "hidden" class to the header
            header.classList.add('hidden');
        } else {
            // Footer is not in view, remove the "hidden" class from the header
            header.classList.remove('hidden');
        }
    }

    function updateBulletHighlight() {
        bullets.forEach((bullet, index) => {
            if (index === currentSection) {
                bullet.classList.add('active');
            } else {
                bullet.classList.remove('active');
            }
        });
    }

    container.addEventListener('wheel', (e) => {
        e.preventDefault();
        if (e.deltaY > 0) {
            scrollToSection(currentSection + 1);
        } else {
            scrollToSection(currentSection - 1);
        }
    });

    $('#header .openMenu').on('click', function() {
        $('.menu').toggleClass('opened');
        $('.openMenu').toggleClass('opened');
    });

    $('#header .menu a').on('click', function() {
        $('.menu').removeClass('opened');
        $('.openMenu').removeClass('opened');
    });
});
