@extends('layouts.app')

@section('title', 'Chery OMODA 5')

@section('content')

<!-- ================= HERO ================= -->

<section class="bg-dark text-white">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-6">

                <span class="badge bg-danger px-3 py-2 mb-3">

                    CROSSOVER SUV

                </span>

                <h1 class="display-2 fw-bold mb-4">

                    Chery OMODA 5

                </h1>

                <p class="lead">

                    Chery OMODA 5 hadir dengan desain futuristik,
                    teknologi pintar,
                    performa turbo,
                    dan fitur keselamatan modern
                    yang cocok untuk generasi muda.

                </p>

                <div class="mt-4">

                    <a href="#spec"

                       class="btn btn-danger btn-lg me-3">

                        Lihat Spesifikasi

                    </a>

                    <a href="https://wa.me/6281234567890"

                       target="_blank"

                       class="btn btn-outline-light btn-lg">

                        <i class="bi bi-whatsapp"></i>

                        Hubungi Sales

                    </a>

                </div>

            </div>

            <div class="col-lg-6 text-center">

                <img

                    src="{{ asset('images/chery/omoda5.png') }}"

                    class="img-fluid"

                    alt="OMODA 5">

            </div>

        </div>

    </div>

</section>

<!-- ================= QUICK INFO ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="row text-center">

            <div class="col-lg-3 col-6">

                <h2 class="text-danger fw-bold">

                    1.5L

                </h2>

                <p>Turbo Engine</p>

            </div>

            <div class="col-lg-3 col-6">

                <h2 class="text-danger fw-bold">

                    CVT

                </h2>

                <p>Transmission</p>

            </div>

            <div class="col-lg-3 col-6">

                <h2 class="text-danger fw-bold">

                    5

                </h2>

                <p>Seats</p>

            </div>

            <div class="col-lg-3 col-6">

                <h2 class="text-danger fw-bold">

                    360°

                </h2>

                <p>Camera</p>

            </div>

        </div>

    </div>

</section>
<!-- ================= KEUNGGULAN ================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                KEUNGGULAN

            </span>

            <h2 class="display-5 fw-bold">

                Mengapa Memilih OMODA 5?

            </h2>

            <p class="text-muted">

                OMODA 5 hadir sebagai SUV crossover modern
                dengan desain futuristik,
                performa turbo,
                serta teknologi terkini.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center p-4">

                        <i class="bi bi-lightning-charge display-4 text-danger"></i>

                        <h5 class="fw-bold mt-3">

                            Turbo Engine

                        </h5>

                        <p class="text-muted">

                            Mesin turbo yang responsif
                            dengan tenaga optimal.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center p-4">

                        <i class="bi bi-shield-check display-4 text-danger"></i>

                        <h5 class="fw-bold mt-3">

                            6 Airbags

                        </h5>

                        <p class="text-muted">

                            Perlindungan maksimal
                            untuk seluruh penumpang.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center p-4">

                        <i class="bi bi-camera-video display-4 text-danger"></i>

                        <h5 class="fw-bold mt-3">

                            360° Camera

                        </h5>

                        <p class="text-muted">

                            Membantu parkir
                            dengan lebih aman.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center p-4">

                        <i class="bi bi-phone display-4 text-danger"></i>

                        <h5 class="fw-bold mt-3">

                            Smart Display

                        </h5>

                        <p class="text-muted">

                            Dual layar digital
                            dengan konektivitas modern.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= FITUR ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img src="{{ asset('images/chery/omoda-feature.jpg') }}"
                     class="img-fluid rounded-4 shadow"
                     alt="OMODA 5 Feature">

            </div>

            <div class="col-lg-6">

                <span class="text-danger fw-bold">

                    FITUR UNGGULAN

                </span>

                <h2 class="display-5 fw-bold my-3">

                    Teknologi Masa Depan

                </h2>

                <p class="text-muted">

                    OMODA 5 dilengkapi berbagai fitur premium
                    untuk kenyamanan dan keamanan berkendara.

                </p>

                <ul class="list-group list-group-flush">

                    <li class="list-group-item">

                        ✔ Adaptive Cruise Control

                    </li>

                    <li class="list-group-item">

                        ✔ Lane Departure Warning

                    </li>

                    <li class="list-group-item">

                        ✔ Blind Spot Detection

                    </li>

                    <li class="list-group-item">

                        ✔ Wireless Charger

                    </li>

                    <li class="list-group-item">

                        ✔ Sony Premium Audio

                    </li>

                    <li class="list-group-item">

                        ✔ Electric Sunroof

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>
<!-- ================= GALLERY ================= -->

<section id="gallery" class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                GALLERY

            </span>

            <h2 class="display-5 fw-bold">

                Galeri Chery OMODA 5

            </h2>

            <p class="text-muted">

                Lihat desain futuristik Chery OMODA 5 dari berbagai sudut.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">

                <img src="{{ asset('images/chery/omoda-gallery1.jpg') }}"
                     class="img-fluid rounded-4 shadow w-100"
                     style="height:260px; object-fit:cover;"
                     alt="OMODA 5">

            </div>

            <div class="col-lg-4 col-md-6">

                <img src="{{ asset('images/chery/omoda-gallery2.jpg') }}"
                     class="img-fluid rounded-4 shadow w-100"
                     style="height:260px; object-fit:cover;"
                     alt="OMODA 5">

            </div>

            <div class="col-lg-4 col-md-6">

                <img src="{{ asset('images/chery/omoda-gallery3.jpg') }}"
                     class="img-fluid rounded-4 shadow w-100"
                     style="height:260px; object-fit:cover;"
                     alt="OMODA 5">

            </div>

            <div class="col-lg-6">

                <img src="{{ asset('images/chery/omoda-gallery4.jpg') }}"
                     class="img-fluid rounded-4 shadow w-100"
                     style="height:320px; object-fit:cover;"
                     alt="OMODA 5">

            </div>

            <div class="col-lg-6">

                <img src="{{ asset('images/chery/omoda-gallery5.jpg') }}"
                     class="img-fluid rounded-4 shadow w-100"
                     style="height:320px; object-fit:cover;"
                     alt="OMODA 5">

            </div>

        </div>

    </div>

</section>

<!-- ================= VIDEO ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                VIDEO

            </span>

            <h2 class="display-5 fw-bold">

                Video Chery OMODA 5

            </h2>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="ratio ratio-16x9 rounded overflow-hidden shadow">

                    <iframe
                        src="https://www.youtube.com/embed/4csFKdP8AfQ"
                        title="OMODA 5"
                        allowfullscreen>
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= HIGHLIGHT ================= -->

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-car-front-fill display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Futuristic Design

                    </h5>

                    <p class="text-muted">

                        Desain crossover modern yang tampil berbeda.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-cpu-fill display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Smart Technology

                    </h5>

                    <p class="text-muted">

                        Teknologi digital yang memudahkan pengemudi.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-speedometer2 display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Powerful Performance

                    </h5>

                    <p class="text-muted">

                        Mesin turbo dengan akselerasi responsif.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-shield-lock-fill display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Safety First

                    </h5>

                    <p class="text-muted">

                        Fitur keselamatan lengkap untuk perjalanan aman.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= INTERIOR ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <img
                    src="{{ asset('images/chery/omoda-interior.jpg') }}"
                    class="img-fluid rounded-4 shadow-lg w-100"
                    alt="Interior OMODA 5">

            </div>

            <div class="col-lg-6">

                <span class="text-danger fw-bold">

                    INTERIOR PREMIUM

                </span>

                <h2 class="display-5 fw-bold my-3">

                    Kabin Futuristik dan Nyaman

                </h2>

                <p class="text-muted">

                    Interior Chery OMODA 5 dirancang dengan konsep modern
                    menggunakan material premium, dashboard digital,
                    ambient lighting, dan kursi ergonomis yang memberikan
                    kenyamanan maksimal selama perjalanan.

                </p>

                <div class="row mt-4">

                    <div class="col-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-danger fs-4 me-2"></i>

                            <div>

                                <h6 class="fw-bold">

                                    Leather Seat

                                </h6>

                                <small class="text-muted">

                                    Jok kulit premium

                                </small>

                            </div>

                        </div>

                    </div>

                    <div class="col-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-danger fs-4 me-2"></i>

                            <div>

                                <h6 class="fw-bold">

                                    Ambient Light

                                </h6>

                                <small class="text-muted">

                                    Lampu interior elegan

                                </small>

                            </div>

                        </div>

                    </div>

                    <div class="col-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-danger fs-4 me-2"></i>

                            <div>

                                <h6 class="fw-bold">

                                    Dual Screen

                                </h6>

                                <small class="text-muted">

                                    Full digital display

                                </small>

                            </div>

                        </div>

                    </div>

                    <div class="col-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-danger fs-4 me-2"></i>

                            <div>

                                <h6 class="fw-bold">

                                    Sony Audio

                                </h6>

                                <small class="text-muted">

                                    Premium Sound System

                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= EKSTERIOR ================= -->

<section class="py-5">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6 order-lg-2">

                <img
                    src="{{ asset('images/chery/omoda-exterior.jpg') }}"
                    class="img-fluid rounded-4 shadow-lg w-100"
                    alt="Eksterior OMODA 5">

            </div>

            <div class="col-lg-6 order-lg-1">

                <span class="text-danger fw-bold">

                    EKSTERIOR SPORTY

                </span>

                <h2 class="display-5 fw-bold my-3">

                    Tampil Berbeda di Setiap Jalan

                </h2>

                <p class="text-muted">

                    OMODA 5 mengusung desain crossover yang futuristik,
                    dilengkapi grille tanpa bingkai,
                    LED Headlamp,
                    DRL modern,
                    dan velg alloy 18 inci
                    yang memberikan kesan sporty.

                </p>

                <ul class="list-group list-group-flush mt-4">

                    <li class="list-group-item">

                        ✔ Diamond Matrix Grille

                    </li>

                    <li class="list-group-item">

                        ✔ LED Headlamp

                    </li>

                    <li class="list-group-item">

                        ✔ Sequential Turn Signal

                    </li>

                    <li class="list-group-item">

                        ✔ Electric Sunroof

                    </li>

                    <li class="list-group-item">

                        ✔ 18 Inch Alloy Wheel

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ================= PERFORMANCE ================= -->

<section class="py-5 bg-dark text-white">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                PERFORMANCE

            </span>

            <h2 class="display-5 fw-bold">

                Performa Turbo yang Responsif

            </h2>

        </div>

        <div class="row text-center">

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    1.5L

                </h2>

                <p>

                    Turbo Engine

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    156 PS

                </h2>

                <p>

                    Maximum Power

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    230 Nm

                </h2>

                <p>

                    Maximum Torque

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    CVT

                </h2>

                <p>

                    Automatic Transmission

                </p>

            </div>

        </div>

    </div>

</section>
<!-- ================= SPESIFIKASI ================= -->

<section id="spec" class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                SPESIFIKASI

            </span>

            <h2 class="display-5 fw-bold">

                Chery OMODA 5

            </h2>

            <p class="text-muted">

                Spesifikasi utama Chery OMODA 5.

            </p>

        </div>

        <div class="row">

            <div class="col-lg-10 mx-auto">

                <div class="table-responsive shadow rounded">

                    <table class="table table-striped table-hover align-middle mb-0">

                        <tbody>

                            <tr>

                                <th width="35%">

                                    Tipe Mesin

                                </th>

                                <td>

                                    1.5L Turbo Petrol Engine

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Kapasitas Mesin

                                </th>

                                <td>

                                    1.498 cc

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Jumlah Silinder

                                </th>

                                <td>

                                    4 Silinder DOHC Turbo

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Tenaga Maksimum

                                </th>

                                <td>

                                    156 PS

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Torsi Maksimum

                                </th>

                                <td>

                                    230 Nm

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Transmisi

                                </th>

                                <td>

                                    CVT Automatic

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Sistem Penggerak

                                </th>

                                <td>

                                    Front Wheel Drive (FWD)

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Kapasitas Tangki

                                </th>

                                <td>

                                    51 Liter

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Kapasitas Penumpang

                                </th>

                                <td>

                                    5 Orang

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Velg

                                </th>

                                <td>

                                    Alloy Wheel 18 Inch

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Rem Depan

                                </th>

                                <td>

                                    Ventilated Disc

                                </td>

                            </tr>

                            <tr>

                                <th>

                                    Rem Belakang

                                </th>

                                <td>

                                    Disc Brake

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= SAFETY ================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                SAFETY FEATURES

            </span>

            <h2 class="display-5 fw-bold">

                Fitur Keselamatan

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h4 class="fw-bold mb-3">

                            Active Safety

                        </h4>

                        <ul>

                            <li>ABS + EBD</li>

                            <li>Brake Assist</li>

                            <li>Electronic Stability Control</li>

                            <li>Traction Control</li>

                            <li>Hill Start Assist</li>

                            <li>Hill Descent Control</li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h4 class="fw-bold mb-3">

                            Passive Safety

                        </h4>

                        <ul>

                            <li>6 Airbags</li>

                            <li>ISOFIX</li>

                            <li>Seat Belt Reminder</li>

                            <li>Child Safety Lock</li>

                            <li>High Strength Body</li>

                            <li>Auto Door Lock</li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h4 class="fw-bold mb-3">

                            Smart Driving

                        </h4>

                        <ul>

                            <li>Adaptive Cruise Control</li>

                            <li>Lane Keeping Assist</li>

                            <li>Blind Spot Detection</li>

                            <li>360° HD Camera</li>

                            <li>Rear Cross Traffic Alert</li>

                            <li>Forward Collision Warning</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= DIMENSI ================= -->

<section class="py-5 bg-dark text-white">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                DIMENSI

            </span>

            <h2 class="display-5 fw-bold">

                Ukuran Kendaraan

            </h2>

        </div>

        <div class="row text-center">

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="text-danger fw-bold">

                    4.400 mm

                </h2>

                <p>

                    Panjang

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="text-danger fw-bold">

                    1.830 mm

                </h2>

                <p>

                    Lebar

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="text-danger fw-bold">

                    1.585 mm

                </h2>

                <p>

                    Tinggi

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="text-danger fw-bold">

                    2.630 mm

                </h2>

                <p>

                    Wheelbase

                </p>

            </div>

        </div>

    </div>

</section>
<!-- ================= PILIHAN WARNA ================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                PILIHAN WARNA

            </span>

            <h2 class="display-5 fw-bold">

                Available Colors

            </h2>

            <p class="text-muted">

                Pilih warna favorit untuk Chery OMODA 5.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/omoda-white.jpg') }}"
                         class="card-img-top"
                         alt="White">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Khaki White

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/omoda-black.jpg') }}"
                         class="card-img-top"
                         alt="Black">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Phantom Black

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/omoda-grey.jpg') }}"
                         class="card-img-top"
                         alt="Grey">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Titan Grey

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/omoda-red.jpg') }}"
                         class="card-img-top"
                         alt="Red">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Blood Stone Red

                        </h5>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= PROMO ================= -->

<section class="py-5 bg-danger text-white">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <h2 class="display-5 fw-bold">

                    Promo OMODA 5

                </h2>

                <p class="lead">

                    Dapatkan berbagai keuntungan khusus bulan ini.

                </p>

                <ul class="list-unstyled fs-5">

                    <li class="mb-2">✅ DP Mulai 15%</li>

                    <li class="mb-2">✅ Bunga Ringan</li>

                    <li class="mb-2">✅ Gratis Service Berkala</li>

                    <li class="mb-2">✅ Bonus Kaca Film Premium</li>

                    <li class="mb-2">✅ Bonus Karpet & Aksesoris</li>

                    <li>✅ Gratis Konsultasi Kredit</li>

                </ul>

            </div>

            <div class="col-lg-5 text-center">

                <img src="{{ asset('images/chery/omoda-promo.png') }}"
                     class="img-fluid"
                     alt="Promo OMODA">

            </div>

        </div>

    </div>

</section>

<!-- ================= SIMULASI KREDIT ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                SIMULASI KREDIT

            </span>

            <h2 class="display-5 fw-bold">

                Estimasi Pembayaran

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            DP

                        </h5>

                        <h2 class="text-danger">

                            Mulai 15%

                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Cicilan

                        </h5>

                        <h2 class="text-danger">

                            Rp4 Jutaan

                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Tenor

                        </h5>

                        <h2 class="text-danger">

                            Hingga 7 Tahun

                        </h2>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= FORM PENAWARAN ================= -->

<section id="contact" class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img src="{{ asset('images/chery/contact-omoda.png') }}"
                     class="img-fluid"
                     alt="Hubungi Sales OMODA 5">

            </div>

            <div class="col-lg-6">

                <span class="text-danger fw-bold">

                    HUBUNGI SALES

                </span>

                <h2 class="display-5 fw-bold mb-4">

                    Dapatkan Penawaran Terbaik

                </h2>

                <p class="text-muted">

                    Isi formulir berikut dan tim sales kami akan segera
                    menghubungi Anda untuk memberikan penawaran terbaik.

                </p>

                <form>

                    <div class="mb-3">

                        <input type="text"
                               class="form-control form-control-lg"
                               placeholder="Nama Lengkap">

                    </div>

                    <div class="mb-3">

                        <input type="text"
                               class="form-control form-control-lg"
                               placeholder="Nomor WhatsApp">

                    </div>

                    <div class="mb-3">

                        <input type="email"
                               class="form-control form-control-lg"
                               placeholder="Email">

                    </div>

                    <div class="mb-3">

                        <textarea class="form-control"
                                  rows="5"
                                  placeholder="Pesan atau pertanyaan"></textarea>

                    </div>

                    <button class="btn btn-danger btn-lg w-100">

                        Kirim Sekarang

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- ================= CALL TO ACTION ================= -->

<section class="py-5 bg-danger text-white">

    <div class="container text-center">

        <h2 class="display-5 fw-bold">

            Jadwalkan Test Drive Hari Ini

        </h2>

        <p class="lead">

            Rasakan langsung pengalaman berkendara bersama
            Chery OMODA 5.

        </p>

        <a href="https://wa.me/6281234567890"

           target="_blank"

           class="btn btn-light btn-lg mt-3">

            <i class="bi bi-whatsapp"></i>

            Chat Sales Sekarang

        </a>

    </div>

</section>




<!-- ================= FLOATING WHATSAPP ================= -->

<a href="https://wa.me/6281234567890"

   target="_blank"

   class="btn btn-success rounded-circle shadow position-fixed"

   style="bottom:25px;
          right:25px;
          width:60px;
          height:60px;
          display:flex;
          align-items:center;
          justify-content:center;
          z-index:999;">

    <i class="bi bi-whatsapp fs-2"></i>

</a>

@endsection