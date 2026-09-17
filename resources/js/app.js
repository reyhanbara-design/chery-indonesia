/*
|--------------------------------------------------------------------------
| Dealer Landing Page
|--------------------------------------------------------------------------
*/
console.log('Vite loaded');

document.addEventListener("DOMContentLoaded", () => {

    /* ==========================
       Navbar Scroll
    ========================== */

    const navbar = document.querySelector(".navbar-custom");

    function navbarScroll() {

        if (!navbar) return;

        if (window.scrollY > 80) {

            navbar.classList.add("navbar-scroll");

        } else {

            navbar.classList.remove("navbar-scroll");

        }

    }

    navbarScroll();

    window.addEventListener("scroll", navbarScroll);

    /* ==========================
       Smooth Scroll
    ========================== */

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener("click", function (e) {

            const target = document.querySelector(this.getAttribute("href"));

            if (!target) return;

            e.preventDefault();

            target.scrollIntoView({

                behavior: "smooth"

            });

        });

    });

    /* ==========================
       Active Navbar
    ========================== */

    const sections = document.querySelectorAll("section[id]");

    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    function activeMenu() {

        let current = "";

        sections.forEach(section => {

            const top = section.offsetTop - 120;

            const height = section.offsetHeight;

            if (pageYOffset >= top) {

                current = section.getAttribute("id");

            }

        });

        navLinks.forEach(link => {

            link.classList.remove("active");

            if (link.getAttribute("href") === "#" + current) {

                link.classList.add("active");

            }

        });

    }

    window.addEventListener("scroll", activeMenu);

    /* ==========================
       Back To Top
    ========================== */

    const topButton = document.createElement("button");

    topButton.innerHTML = "↑";

    topButton.className = "btn btn-danger";

    topButton.style.position = "fixed";

    topButton.style.bottom = "100px";

    topButton.style.right = "25px";

    topButton.style.width = "50px";

    topButton.style.height = "50px";

    topButton.style.borderRadius = "50%";

    topButton.style.display = "none";

    topButton.style.zIndex = "999";

    document.body.appendChild(topButton);

    window.addEventListener("scroll", () => {

        if (window.scrollY > 400) {

            topButton.style.display = "block";

        } else {

            topButton.style.display = "none";

        }

    });

    topButton.addEventListener("click", () => {

        window.scrollTo({

            top: 0,

            behavior: "smooth"

        });

    });

    /* ==========================
       Product Hover
    ========================== */

    document.querySelectorAll(".product-card").forEach(card => {

        card.addEventListener("mouseenter", () => {

            card.style.transform = "translateY(-12px)";

        });

        card.addEventListener("mouseleave", () => {

            card.style.transform = "translateY(0px)";

        });

    });

    /* ==========================
       Counter Animation
    ========================== */

    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {

        counter.innerText = "0";

        const update = () => {

            const target = +counter.dataset.target;

            const current = +counter.innerText;

            const increment = target / 100;

            if (current < target) {

                counter.innerText = Math.ceil(current + increment);

                setTimeout(update, 20);

            } else {

                counter.innerText = target;

            }

        };

        update();

    });

    /* ==========================
       Reveal Animation
    ========================== */

    const reveals = document.querySelectorAll(".reveal");

    function revealAnimation() {

        reveals.forEach(item => {

            const top = item.getBoundingClientRect().top;

            const height = window.innerHeight;

            if (top < height - 100) {

                item.classList.add("active");

            }

        });

    }

    revealAnimation();

    window.addEventListener("scroll", revealAnimation);

});