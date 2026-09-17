<!DOCTYPE html>
<html lang="id">

<style>
/* ==========================================
   NAVBAR FIX
   ========================================== */

.navbar-transparent {
    position: absolute !important;
    top: 0 !important;
    left: 10px !important;
    width: 100% !important;
    height: 80px !important;
    min-height: 80px !important;
    padding: 0 !important;
    margin: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    z-index: 99999 !important;
}

.navbar-transparent .container {
    height: 80px !important;
    display: flex !important;
    align-items: center !important;
}

/* LOGO */
.navbar-transparent .brand-logo {
    width: 180px !important;
    height: 45px !important;
    max-width: 180px !important;
    max-height: 45px !important;
    object-fit: contain !important;
    display: block !important;
}

/* Posisi logo lebih ke kiri */
.navbar-transparent .navbar-brand {
    margin-left: -150px !important;
}

/* MENU */
.navbar-transparent .navbar-nav {
    display: flex !important;
    align-items: center !important;
}

.navbar-transparent .nav-link {
    color: #fff !important;
    font-size: 16px !important;
    font-weight: 500 !important;
    padding: 10px 14px !important;
}

/* KONTAK */
.navbar-transparent .btn-danger {
    color: #fff !important;
    padding: 10px 24px !important;
}

/* ==========================================
   MOBILE
   ========================================== */

@media (max-width: 991px) {
    /* LOGO MOBILE */
.navbar-transparent .navbar-brand {
    position: absolute !important;
    left: 10px !important;
    top: 15px !important;

    margin: 0 !important;
    padding: 0 !important;

    display: flex !important;
    align-items: center !important;

    z-index: 99999 !important;
}

.navbar-transparent .brand-logo {
    width: 145px !important;
    height: 38px !important;
    max-width: 145px !important;
    max-height: 38px !important;
    object-fit: contain !important;
}


/* HAMBURGER MOBILE */
.navbar-transparent .navbar-toggler {
    position: absolute !important;

    right: 15px !important;
    top: 14px !important;

    width: 46px !important;
    height: 42px !important;

    margin: 0 !important;
    padding: 6px 10px !important;

    z-index: 99999 !important;
}
}

/* =========================================
   POSISI NAVBAR - MOBILE
   ========================================= */

@media (max-width: 991px) {

    /* Container navbar dibuat full width */
    .navbar-transparent > .container {
        width: 100% !important;
        max-width: 100% !important;
        padding-left: 0px !important;
        padding-right: 10px !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    /* LOGO */
    .navbar-transparent .navbar-brand {
        position: static !important;
        margin-left: 0 !important;
        margin-right: auto !important;
        padding: 0 !important;
    }

    .navbar-transparent .brand-logo {
        width: 145px !important;
        height: 38px !important;
        max-width: 145px !important;
        max-height: 38px !important;
        object-fit: contain !important;
    }

    /* HAMBURGER */
    .navbar-transparent .navbar-toggler {
        position: static !important;
        margin-left: auto !important;
        margin-right: 0 !important;
    }
}
.navbar-transparent > .container {
    padding-left: 0 !important;
    padding-right: 10px !important;
}
</style>

<style>
@media (max-width: 768px) {

    /* Paksa container navbar memenuhi layar */
    .navbar-transparent > .container {
        max-width: none !important;
        width: 100% !important;
        padding-left: 0px !important;
        padding-right: 10px !important;
        margin: 0 !important;
    }

    /* LOGO */
    .navbar-transparent .navbar-brand {
        margin-left: 0 !important;
        margin-right: auto !important;
        padding: 0 !important;

        width: auto !important;
        max-width: none !important;

        position: relative !important;
        left: 0 !important;
    }

    .navbar-transparent .navbar-brand .brand-logo {
        width: 145px !important;
        height: 38px !important;
        max-width: 145px !important;
        max-height: 38px !important;

        object-fit: contain !important;
        display: block !important;
    }

    /* HAMBURGER TETAP DI KANAN */
    .navbar-transparent .navbar-toggler {
        margin-left: auto !important;
        margin-right: 0 !important;
        position: relative !important;
        right: 0 !important;
    }
}
</style>
<style>
@media (max-width: 768px) {

    /* NAVBAR */
    nav.navbar.navbar-transparent {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 70px !important;
        padding: 0 !important;
        margin: 0 !important;
        background: transparent !important;
        z-index: 99999 !important;
    }

    /* CONTAINER */
    nav.navbar.navbar-transparent > .container {
        position: relative !important;

        width: 100vw !important;
        max-width: 100vw !important;

        height: 70px !important;

        margin: 0 !important;

        padding: 0 !important;
    }

    /* =========================
       LOGO
       ========================= */

    nav.navbar.navbar-transparent .navbar-brand {
        position: absolute !important;

        left: 0 !important;
        top: 15px !important;

        width: 145px !important;
        height: 40px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
        z-index: 100000 !important;
    }

    nav.navbar.navbar-transparent .navbar-brand img {
        display: block !important;

        width: 145px !important;
        height: 38px !important;

        max-width: 145px !important;
        max-height: 38px !important;

        margin: 0 !important;
        padding: 0 !important;

        object-fit: contain !important;
    }

    /* =========================
       HAMBURGER
       ========================= */

    nav.navbar.navbar-transparent .navbar-toggler {
        position: absolute !important;

        right: 15px !important;
        top: 14px !important;

        width: 46px !important;
        height: 42px !important;

        margin: 0 !important;

        z-index: 100001 !important;
    }
}
</style>
<head>  

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Dealer Resmi Chery Indonesia">

    <meta
        name="keywords"
        content="Chery,Tiggo,OMODA,Dealer Mobil">

    <meta
        name="author"
        content="Chery Auto Dealer">

    <title>

        @yield('title')

    </title>

    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <!-- Google Font -->

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS -->

    <link
        href="https://unpkg.com/aos@2.3.4/dist/aos.css"
        rel="stylesheet">

    

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.getElementById('siteNavbarToggle');
    const menu = document.getElementById('siteNavbarMenu');

    if (!toggle || !menu) {
        return;
    }

    toggle.addEventListener('click', function () {

        menu.classList.toggle('menu-open');

    });

    menu.querySelectorAll('a').forEach(function (link) {

        link.addEventListener('click', function () {
            menu.classList.remove('menu-open');
        });

    });

});
</script>
  <!-- ==================== NAVBAR ==================== -->
<nav class="navbar navbar-expand-lg navbar-transparent">

    <div class="container">

        <a class="navbar-brand"
           href="{{ request()->is('mitsubishi*')
                ? route('mitsubishi.index')
                : route('chery.index') }}">

            @if(request()->is('mitsubishi*'))

                <img
                    src="{{ asset('images/logo/mitsubishi-logo.png') }}"
                    alt="Mitsubishi Motors"
                    class="brand-logo">

            @else

             
            <a class="navbar-brand chery-logo" href="{{ route('chery.index') }}">
             <img 
             src="{{ asset('images/logo/chery-logo.png') }}" 
             alt="Chery">
             
</a>

            @endif

        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse"
             id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ request()->is('mitsubishi*')
                            ? route('mitsubishi.index')
                            : route('chery.index') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ request()->is('mitsubishi*')
                            ? route('mitsubishi.mobil.index')
                            : route('chery.mobil.index') }}">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ request()->is('mitsubishi*')
                            ? route('mitsubishi.promo')
                            : route('chery.promo') }}">
                        Promo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ request()->is('mitsubishi*')
                            ? route('mitsubishi.tentang')
                            : route('chery.tentang') }}">
                        Tentang Kami
                    </a>
                </li>

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">

                    <a class="btn btn-danger rounded-pill px-4"
                       href="{{ request()->is('mitsubishi*')
                            ? route('mitsubishi.kontak')
                            : route('chery.kontak') }}">

                        Kontak

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>
           
<!--==================== MAIN CONTENT ====================-->

<main>

    @yield('content')
 
</main>   

<!-- ==================== FOOTER ==================== -->
<footer class="chery-footer">
    <div class="container">
        <div class="chery-footer-grid">

            <!-- BRAND -->
            <div class="footer-brand">
                <h4>Chery Indonesia</h4>

                <p>
                    Temukan berbagai pilihan kendaraan Chery dengan desain
                    modern, teknologi inovatif, dan kenyamanan terbaik.
                </p>

                <!-- SOCIAL MEDIA -->
                <div class="footer-social">

                    <a href="https://www.facebook.com/CheryMotorIndonesia"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Facebook Chery Indonesia">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="https://www.instagram.com/cherymotorindonesia/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Instagram Chery Indonesia">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://www.youtube.com/@CheryMotorIndonesia"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="YouTube Chery Indonesia">
                        <i class="bi bi-youtube"></i>
                    </a>

                    <a href="https://www.tiktok.com/@cherymotorindonesia"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="TikTok Chery Indonesia">
                        <i class="bi bi-tiktok"></i>
                    </a>

                </div>
            </div>


            <!-- MENU -->
            <div class="footer-column">
                <h5>Menu</h5>

                <ul>
                    <li>
                        <a href="{{ route('chery.index') }}">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('chery.mobil.index') }}">
                            Produk
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('chery.promo') }}">
                            Promo
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('chery.kontak') }}">
                            Kontak
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('chery.tentang') }}">
                            Tentang Kami
                        </a>
                    </li>
                </ul>
            </div>


            <!-- LAYANAN -->
            <div class="footer-column">
                <h5>Layanan</h5>

                <ul>
                    <li>
                        <a href="{{ route('chery.kontak') }}">
                            Konsultasi Mobil
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('chery.kontak') }}">
                            Simulasi Kredit
                        </a>
                    </li>

                    <li>
                        <a href="#test-drive">
                            Test Drive
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('chery.promo') }}">
                            Informasi Promo
                        </a>
                    </li>
                </ul>
            </div>


            <!-- KONTAK -->
            <div class="footer-column">
                <h5>Hubungi Kami</h5>

                <ul class="footer-contact">
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Chery Indonesia</span>
                    </li>

                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <span>Hubungi Sales</span>
                    </li>

                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <span>Informasi Chery</span>
                    </li>

                    <li>
                        <i class="bi bi-clock-fill"></i>
                        <span>Senin - Sabtu, 08.00 - 17.00</span>
                    </li>
                </ul>
            </div>

        </div>

        <hr>

        <div class="footer-bottom">
            <p>
                &copy; {{ date('Y') }} Chery Indonesia.
                All Rights Reserved.
            </p>
        </div>

    </div>
</footer>

        

<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/6281556863658"
   class="floating-whatsapp"
   target="_blank"
   rel="noopener"
   aria-label="Hubungi kami melalui WhatsApp">

    <i class="bi bi-whatsapp"></i>

</a>


<!--==================== JAVASCRIPT ====================-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>

    // ===============================
    // Inisialisasi AOS
    // ===============================

    AOS.init({

        duration:1000,

        once:true

    });

    // ===============================
    // Navbar berubah saat scroll
    // ===============================

    window.addEventListener("scroll",function(){

        const navbar=document.querySelector(".navbar");

        if(window.scrollY>50){

            navbar.classList.add("scrolled");

        }else{

            navbar.classList.remove("scrolled");

        }

    });


    

    // ===============================
    // Smooth Scroll
    // ===============================

    document.querySelectorAll('a[href^="#"]').forEach(anchor=>{

        anchor.addEventListener("click",function(e){

            const target=document.querySelector(this.getAttribute("href"));

            if(target){

                e.preventDefault();

                target.scrollIntoView({

                    behavior:"smooth",

                    block:"start"

                });

            }

        });

    });

    // ===============================
    // Active Menu
    // ===============================

    const sections=document.querySelectorAll("section[id]");

    const navLinks=document.querySelectorAll(".navbar-nav .nav-link");

    window.addEventListener("scroll",()=>{

        let current="";

        sections.forEach(section=>{

            const sectionTop=section.offsetTop-120;

            const sectionHeight=section.offsetHeight;

            if(pageYOffset>=sectionTop){

                current=section.getAttribute("id");

            }

        });

        navLinks.forEach(link=>{

            link.classList.remove("active");

            if(link.getAttribute("href")=="#"+current){

                link.classList.add("active");

            }

        });

    });

</script>

</body>

</html>