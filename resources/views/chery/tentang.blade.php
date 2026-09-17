@extends('layouts.app')

@section('title', 'Tentang Kami - Chery')

@section('content')

<!-- HEADER -->
<section class="py-5 bg-dark text-white">

    <div class="container">

        <div class="row align-items-center g-4">

            <div class="col-lg-7">

                <span class="badge bg-danger mb-3">
                    TENTANG KAMI
                </span>

                <h1 class="display-5 fw-bold mb-3">
                    Kenali Lebih Dekat Chery Auto
                </h1>

                <p class="lead text-light mb-0">
                    
                    Kami hadir untuk membantu Anda menemukan kendaraan yang
                    sesuai dengan kebutuhan dan gaya hidup.
                </p>

            </div>

            <div class="col-lg-5">

                <img src="{{ asset('images/chery/tiggo8/tiggo8-2.jpg') }}"
                     alt="Chery Tiggo 8 Pro"
                     class="img-fluid rounded-4 shadow-lg">

            </div>

        </div>

    </div>

</section>


<!-- PROFIL -->
<section class="py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img src="{{ asset('images/chery/omoda5/omoda5-2.jpg') }}"
                     alt="Chery OMODA 5"
                     class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6">

                <span class="badge bg-danger mb-3">
                    PROFIL KAMI
                </span>

                <h2 class="fw-bold mb-3">
                    Partner Perjalanan Mobil Impian Anda
                </h2>

                <p class="text-secondary">
                  
                    
                </p>

                <p class="text-secondary">
                    Kami memberikan pelayanan yang ramah, informasi kendaraan
                    yang jelas, serta membantu pelanggan dalam proses
                    konsultasi dan pembelian mobil.
                </p>

                <div class="row g-3 mt-3">

                    <div class="col-6">

                        <div class="border rounded-4 p-3 h-100">

                            <h3 class="fw-bold text-danger mb-1">
                                10+
                            </h3>

                            <p class="text-secondary mb-0">
                                Tahun Pengalaman
                            </p>

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="border rounded-4 p-3 h-100">

                            <h3 class="fw-bold text-danger mb-1">
                                500+
                            </h3>

                            <p class="text-secondary mb-0">
                                Pelanggan Terlayani
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- KEUNGGULAN -->
<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-danger mb-3">
                KEUNGGULAN KAMI
            </span>

            <h2 class="fw-bold">
                Mengapa Memilih Kami?
            </h2>

            <p class="text-secondary">
                Kami berusaha memberikan pengalaman terbaik untuk setiap
                pelanggan.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mb-3">
                            <i class="bi bi-car-front-fill text-danger fs-1"></i>
                        </div>

                        <h5 class="fw-bold">
                            Pilihan Kendaraan
                        </h5>

                        <p class="text-secondary mb-0">
                            Pilihan mobil berkualitas sesuai kebutuhan dan gaya hidup Anda.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mb-3">
                            <i class="bi bi-person-check-fill text-danger fs-1"></i>
                        </div>

                        <h5 class="fw-bold">
                            Sales Profesional
                        </h5>

                        <p class="text-secondary mb-0">
                            Siap membantu dengan informasi dan solusi terbaik untuk Anda.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mb-3">
                            <i class="bi bi-headset text-danger fs-1"></i>
                        </div>

                        <h5 class="fw-bold">
                            Pelayanan Terbaik
                        </h5>

                        <p class="text-secondary mb-0">
                            Proses mudah, cepat, ramah, dan mengutamakan kepuasan pelanggan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- VISI MISI -->
<section class="py-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4 p-md-5">

                        <span class="badge bg-danger mb-3">
                            VISI
                        </span>

                        <h3 class="fw-bold mb-3">
                            Menjadi Pilihan Utama Pelanggan
                        </h3>

                        <p class="text-secondary mb-0">
                             Kami ingin menjadi partner
                            terpercaya dalam memenuhi kebutuhan kendaraan.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4 p-md-5">

                        <span class="badge bg-danger mb-3">
                            MISI
                        </span>

                        <h3 class="fw-bold mb-3">
                            Memberikan Pelayanan Berkualitas
                        </h3>

                        <p class="text-secondary mb-0">
                             Kami memberikan informasi,
                            konsultasi, dan pelayanan secara profesional.
                        </p>

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
            Ingin Berkonsultasi Tentang Mobil Chery?
        </h2>

        <p class="text-light mb-4">
            Tim sales kami siap membantu menjawab pertanyaan Anda.
        </p>

        <a href="{{ route('chery.kontak') }}"
           class="btn btn-danger btn-lg px-4">
            Hubungi Sales
        </a>

    </div>

</section>

@endsection