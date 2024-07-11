document.addEventListener("DOMContentLoaded", function() {
    // Sidebar Toggle
    const navToggle = document.getElementById('nav__toggle');
    const navClose = document.getElementById('nav__close');
    const navMenu = document.getElementById('sidebar');

    if (navToggle && navClose && navMenu) {
        navToggle.addEventListener("click", () => {
            navMenu.classList.add('show-sidebar');
        });

        navClose.addEventListener("click", () => {
            navMenu.classList.remove('show-sidebar');
        });
    }

    // Skills Tabs
    const tabs = document.querySelectorAll('[data-target]');
    const tabContents = document.querySelectorAll('[data-content]');

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            const target = document.querySelector(tab.dataset.target);

            tabContents.forEach(content => {
                content.classList.remove('skills__active');
            });

            tabs.forEach(tab => {
                tab.classList.remove('skills__active');
            });

            tab.classList.add('skills__active');
            target.classList.add('skills__active');
        });
    });

    // Mixitup Portfolio Filtering
    let mixerPortfolio = mixitup('.work__container', {
        selectors: {
            target: '.work__card'
        },
        animation: {
            duration: 300
        }
    });

    // Swiper for Testimonials
    let swiper = new Swiper(".testimonials__container", {
        spaceBetween: 24,
        loop: true,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 48,
            },
        }
    });

    // Input Animation and Placeholder Clearing
    const inputs = document.querySelectorAll('input[name="Username"], input[name="email"], input[name="Phone"], textarea[name="Message"]');

    function clearOnStart() {
        if (this.value === this.placeholder) {
            this.value = '';
        }
    }

    function focusFunc() {
        let parent = this.parentNode;
        parent.classList.add("focus");
    }

    function blurFunc() {
        let parent = this.parentNode;
        if (this.value === "") {
            parent.classList.remove("focus");
        }
    }

    inputs.forEach(input => {
        input.addEventListener("focus", focusFunc);
        input.addEventListener("blur", blurFunc);
        input.addEventListener('input', clearOnStart);
    });

    // Navigation Highlighter on Scroll
    const sections = document.querySelectorAll("section[id]");

    function navHighlighter() {
        let scrollY = window.pageYOffset;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 50;
            const sectionId = current.getAttribute("id");

            const link = document.querySelector('.nav__menu a[href*=' + sectionId + ']');
            if (link) {
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    link.classList.add("active-link");
                } else {
                    link.classList.remove("active-link");
                }
            }
        });
    }

    window.addEventListener("scroll", navHighlighter);

    // Additional functionalities like work popup and service modal can be added similarly here
});
