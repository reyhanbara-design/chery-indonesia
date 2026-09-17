@extends('layouts.app')

@section('title', 'Chery Indonesia')

@section('content')

<!-- HERO SLIDER -->
<section id="heroChery" class="hero-section">

    <div id="cheryCarousel"
         class="carousel slide carousel-fade"
         data-bs-ride="carousel"
         data-bs-interval="3000">

        <div class="carousel-indicators">
            <button type="button"
                    data-bs-target="#cheryCarousel"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"></button>

            <button type="button"
                    data-bs-target="#cheryCarousel"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"></button>

            <button type="button"
                    data-bs-target="#cheryCarousel"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">

                <img src="{{ asset('images/chery/omoda5/omoda55-1.jpg') }}"
                     class="d-block w-100 hero-image"
                     alt="Chery OMODA 5">

                <div class="hero-overlay"></div>

                <div class="carousel-caption hero-caption text-start">
                    <span class="badge bg-danger mb-3">
                        SUV MODERN
                    </span>

                    <h1 class="display-3 fw-bold">
                        Chery OMODA 5
                    </h1>

                    <p class="lead">
                        Desain modern, teknologi pintar, dan kenyamanan
                        untuk perjalanan masa kini.
                    </p>

                    <a href="{{ route('chery.mobil.omoda5') }}"
                       class="btn btn-danger btn-lg px-4">
                        Lihat Detail
                    </a>
                </div>

            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">

                <img src="{{ asset('images/chery/tiggo8/tiggo8-1.png') }}"
                     class="d-block w-100 hero-image"
                     alt="Chery Tiggo 8 Pro">

                <div class="hero-overlay"></div>

                <div class="carousel-caption hero-caption text-start">
                    <span class="badge bg-danger mb-3">
                        SUV PREMIUM
                    </span>

                    <h1 class="display-3 fw-bold">
                        Chery Tiggo 8 Pro
                    </h1>

                    <p class="lead">
                        SUV premium dengan kabin luas dan fitur
                        keselamatan modern.
                    </p>

                    <a href="{{ route('chery.mobil.tiggo8') }}"
                       class="btn btn-danger btn-lg px-4">
                        Lihat Detail
                    </a>
                </div>

            </div>

            <!-- SLIDE 3 -->
            <div class="carousel-item">

                <img src="{{ asset('images/chery/omoda5/omoda5-2.jpg') }}"
                     class="d-block w-100 hero-image"
                     alt="Promo Chery">

                <div class="hero-overlay"></div>

                <div class="carousel-caption hero-caption text-start">
                    <span class="badge bg-danger mb-3">
                        PROMO TERBARU
                    </span>

                    <h1 class="display-3 fw-bold">
                        Wujudkan Mobil Impianmu
                    </h1>

                    <p class="lead">
                        Dapatkan informasi promo dan penawaran terbaik
                        dari sales Chery.
                    </p>

                    <a href="{{ route('chery.promo') }}"
                       class="btn btn-danger btn-lg px-4">
                        Lihat Promo
                    </a>
                </div>

            </div>

        </div>

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#cheryCarousel"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#cheryCarousel"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>

        </button>

    </div>

</section>


<!-- TENTANG SINGKAT -->
<section class="py-5 bg-light">

    <div class="container">

        <div class="row align-items-center g-4">

            <div class="col-lg-6">
                <span class="badge bg-danger mb-3">
                    TENTANG CHERY
                </span>

                <h2 class="fw-bold mb-3">
                    Berkendara Lebih Percaya Diri Bersama Chery
                </h2>

                <p class="text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Chery menghadirkan kendaraan dengan desain modern,
                    teknologi inovatif, serta kenyamanan untuk keluarga.
                </p>

                <a href="{{ route('chery.tentang') }}"
                   class="btn btn-outline-danger">
                    Selengkapnya
                </a>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('images/chery/tiggo8/tiggo8-2.jpg') }}"
                     alt="Chery Tiggo 8"
                     class="img-fluid rounded-4 shadow">
            </div>

        </div>

    </div>

</section>


<!-- PRODUK -->
<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">
            <span class="badge bg-danger mb-3">
                PRODUK UNGGULAN
            </span>

            <h2 class="fw-bold">
                Pilihan Mobil Chery
            </h2>

            <p class="text-secondary">
                Temukan kendaraan yang sesuai dengan kebutuhan Anda.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                    <img src="{{ asset('images/chery/omoda5/omoda55-1.jpg') }}"
                         class="card-img-top product-image"
                         alt="Chery OMODA 5">

                    <div class="card-body p-4">

                        <span class="badge bg-danger mb-2">
                            SUV MODERN
                        </span>

                        <h4 class="fw-bold">
                            Chery OMODA 5
                        </h4>

                        <p class="text-secondary">
                            Tampil stylish, berkendara penuh percaya diri. OMODA 5 hadir dengan desain futuristik, teknologi modern, dan kenyamanan premium untuk gaya hidup Anda.
                        </p>

                        <a href="{{ route('chery.mobil.omoda5') }}"
                           class="btn btn-danger">
                            Lihat Detail
                        </a>

                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                    <img src="{{ asset('images/chery/tiggo8/tiggo8-1.png') }}"
                         class="card-img-top product-image"
                         alt="Chery Tiggo 8 Pro">

                    <div class="card-body p-4">

                        <span class="badge bg-danger mb-2">
                            SUV PREMIUM
                        </span>

                        <h4 class="fw-bold">
                            Chery Tiggo 8 Pro
                        </h4>

                        <p class="text-secondary">
                            SUV premium untuk perjalanan istimewa bersama keluarga. Tiggo 8 Pro menawarkan kabin luas, kenyamanan berkelas, dan teknologi canggih di setiap perjalanan.
                        </p>

                        <a href="{{ route('chery.mobil.tiggo8') }}"
                           class="btn btn-danger">
                            Lihat Detail
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- PROMO -->
<section id="promo" class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-danger mb-3">
                PROMO TERBARU
            </span>

            <h2 class="fw-bold">
                Penawaran Spesial Chery
            </h2>

            <p class="text-secondary">
                Dapatkan informasi promo menarik dari sales kami.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <i class="bi bi-cash-stack text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Harga Spesial
                        </h5>

                        <p class="text-secondary">
                            Dapatkan harga terbaik untuk mobil impian Anda!
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <i class="bi bi-credit-card text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Paket Kredit
                        </h5>

                        <p class="text-secondary">
                            Pilihan cicilan fleksibel yang disesuaikan dengan kebutuhan Anda.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <i class="bi bi-gift text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Bonus Pembelian
                        </h5>

                        <p class="text-secondary">
                            Nikmati bonus menarik dan keuntungan spesial setiap pembelian!
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="text-center mt-4">

            <a href="{{ route('chery.promo') }}"
               class="btn btn-danger px-4">
                Lihat Semua Promo
            </a>

        </div>

    </div>

</section>

{{-- TESTIMONI --}}
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="badge bg-danger mb-3">
                TESTIMONI PELANGGAN
            </span>

            <h2 class="fw-bold">
                Pengalaman Pelanggan Bersama Chery
            </h2>

            <p class="text-muted">
                Kepuasan pelanggan adalah prioritas kami. Dengarkan pengalaman mereka dan temukan alasan mengapa Chery menjadi pilihan untuk menemani setiap perjalanan.
            </p>
        </div>

        <div id="testimonialCarousel"
             class="carousel slide"
             data-bs-ride="carousel">

            <div class="carousel-inner">

                {{-- Testimoni 1 --}}
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 text-center">

                                <div class="mb-3 text-warning fs-4">
                                    ★ ★ ★ ★ ★
                                </div>

                                <p class="text-muted fst-italic">
                                    "Chery memberikan pengalaman berkendara yang nyaman,
                                    modern, dan menyenangkan."
                                </p>

                                <h5 class="fw-bold mb-1">
                                    Budi Santoso
                                </h5>

                                <small class="text-muted">
                                    Pelanggan Chery OMODA 5
                                </small>

                            </div>

                        </div>
                    </div>
                </div>

                {{-- Testimoni 2 --}}
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 text-center">

                                <div class="mb-3 text-warning fs-4">
                                    ★ ★ ★ ★ ★
                                </div>

                                
                                <p class="text-muted fst-italic">
                                "Desain mobil terlihat premium dan fitur yang tersedia
                                    sangat membantu aktivitas sehari-hari."
                                </p>

                                <h5 class="fw-bold mb-1">
                                    Siti Rahma
                                </h5>

                                <small class="text-muted">
                                    Pelanggan Chery Tiggo 8 Pro
                                </small>

                            </div>

                        </div>
                    </div>
                </div>

                {{-- Testimoni 3 --}}
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 text-center">

                                <div class="mb-3 text-warning fs-4">
                                    ★ ★ ★ ★ ★
                                </div>

                                <p class="text-muted fst-italic">
                                    "Pelayanan sales ramah dan proses konsultasi kendaraan
                                    berlangsung dengan mudah."
                                </p>

                                <h5 class="fw-bold mb-1">
                                    Andi Pratama
                                </h5>

                                <small class="text-muted">
                                    Pelanggan Chery
                                </small>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">

                <span class="carousel-control-prev-icon bg-danger rounded-circle p-3"></span>
                <span class="visually-hidden">Sebelumnya</span>

            </button>

            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">

                <span class="carousel-control-next-icon bg-danger rounded-circle p-3"></span>
                <span class="visually-hidden">Berikutnya</span>

            </button>

        </div>

    </div>
</section>

{{-- FAQ --}}
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="badge bg-danger mb-3">
                FAQ
            </span>

            <h2 class="fw-bold">
                Pertanyaan yang Sering Diajukan
            </h2>

            <p class="text-muted">
                Temukan jawaban dari pertanyaan seputar pembelian mobil Chery.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">

                <div class="accordion" id="faqAccordion">

                    {{-- FAQ 1 --}}
                    <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">

                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold rounded-3"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqOne">

                                Apakah tersedia layanan Test Drive?

                            </button>
                        </h2>

                        <div id="faqOne"
                             class="accordion-collapse collapse show"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body text-muted">
                                Ya, pelanggan dapat menghubungi sales untuk
                                mengatur jadwal Test Drive sesuai waktu yang tersedia.
                            </div>

                        </div>

                    </div>

                    {{-- FAQ 2 --}}
                    <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">

                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold rounded-3"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqTwo">

                                Bagaimana cara mendapatkan informasi harga mobil?

                            </button>
                        </h2>

                        <div id="faqTwo"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body text-muted">
                                Silakan menghubungi sales melalui WhatsApp atau
                                halaman Kontak untuk mendapatkan informasi harga
                                dan penawaran terbaru.
                            </div>

                        </div>

                    </div>

                    {{-- FAQ 3 --}}
                    <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">

                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold rounded-3"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqThree">

                                Apakah tersedia pilihan warna kendaraan?

                            </button>
                        </h2>

                        <div id="faqThree"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body text-muted">
                                Pilihan warna kendaraan dapat berbeda sesuai
                                tipe dan ketersediaan unit. Hubungi sales untuk
                                informasi lebih lanjut.
                            </div>

                        </div>

                    </div>

                    {{-- FAQ 4 --}}
                    <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">

                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold rounded-3"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqFour">

                                Apakah bisa melakukan konsultasi sebelum membeli?

                            </button>
                        </h2>

                        <div id="faqFour"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body text-muted">
                                Tentu. Pelanggan dapat melakukan konsultasi
                                mengenai tipe mobil, fitur, simulasi pembelian,
                                dan kebutuhan kendaraan bersama sales.
                            </div>

                        </div>

                    </div>

                    {{-- FAQ 5 --}}
                    <div class="accordion-item border-0 shadow-sm rounded-3">

                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold rounded-3"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqFive">

                                Bagaimana cara menghubungi sales Chery?

                            </button>
                        </h2>

                        <div id="faqFive"
                             class="accordion-collapse collapse"
                             data-bs-parent="#faqAccordion">

                            <div class="accordion-body text-muted">
                                Silakan klik tombol WhatsApp atau buka halaman
                                Kontak untuk mengirimkan pertanyaan kepada sales.
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</section>

<!-- CTA -->
<section class="py-5 bg-dark text-white">

    <div class="container text-center">

        <h2 class="fw-bold mb-3">
            Siap Menemukan Mobil Impian Anda?
        </h2>

        <p class="text-light mb-4">
            Hubungi sales kami untuk mendapatkan informasi lebih lanjut.
        </p>

        <a href="{{ route('chery.kontak') }}"
           class="btn btn-danger btn-lg px-4">
            Hubungi Kami
        </a>

    </div>

</section>

@endsection