@extends('layouts.app')

@section('title', 'Chery Tiggo 8 Pro')

@section('content')

<!-- ================= HERO ================= -->

<section class="bg-dark text-white">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-6">

                <span class="badge bg-danger px-3 py-2 mb-3">

                    SUV PREMIUM

                </span>

                <h1 class="display-2 fw-bold mb-4">

                    Chery Tiggo 8 Pro

                </h1>

                <p class="lead">

                    Chery Tiggo 8 Pro merupakan SUV Premium
                    7 penumpang yang menggabungkan desain mewah,
                    teknologi modern,
                    kenyamanan maksimal,
                    serta fitur keselamatan terbaik.

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
                    src="{{ asset('images/chery/tiggo8.png') }}"
                    class="img-fluid"
                    alt="Chery Tiggo 8 Pro">

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

                    7

                </h2>

                <p>

                    Penumpang

                </p>

            </div>

            <div class="col-lg-3 col-6">

                <h2 class="text-danger fw-bold">

                    Turbo

                </h2>

                <p>

                    Engine

                </p>

            </div>

            <div class="col-lg-3 col-6">

                <h2 class="text-danger fw-bold">

                    CVT

                </h2>

                <p>

                    Transmission

                </p>

            </div>

            <div class="col-lg-3 col-6">

                <h2 class="text-danger fw-bold">

                    6

                </h2>

                <p>

                    Airbags

                </p>

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

                Mengapa Memilih Tiggo 8 Pro?

            </h2>

            <p class="text-muted">

                Chery Tiggo 8 Pro hadir dengan kombinasi desain premium,
                teknologi modern, performa bertenaga, dan fitur keselamatan
                yang lengkap untuk kenyamanan seluruh keluarga.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-speedometer2 display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Turbo Engine

                    </h5>

                    <p class="text-muted">

                        Mesin 1.6L Turbo memberikan performa responsif
                        dengan efisiensi bahan bakar yang baik.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-shield-check display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Safety

                    </h5>

                    <p class="text-muted">

                        Dilengkapi 6 Airbags,
                        Electronic Stability Control,
                        dan berbagai fitur keselamatan aktif.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-display display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Smart Display

                    </h5>

                    <p class="text-muted">

                        Dual Screen Display berukuran besar
                        dengan konektivitas Android Auto
                        dan Apple CarPlay.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <i class="bi bi-stars display-4 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Premium Interior

                    </h5>

                    <p class="text-muted">

                        Kabin mewah dengan material premium,
                        panoramic sunroof,
                        dan ambient lighting.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= FITUR ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                FITUR UNGGULAN

            </span>

            <h2 class="display-5 fw-bold">

                Teknologi Modern

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg h-100">

                    <div class="card-body text-center p-4">

                        <i class="bi bi-camera-video display-4 text-danger"></i>

                        <h4 class="fw-bold mt-3">

                            360° Camera

                        </h4>

                        <p class="text-muted">

                            Membantu pengemudi melihat kondisi sekitar kendaraan
                            dengan lebih jelas saat parkir maupun bermanuver.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg h-100">

                    <div class="card-body text-center p-4">

                        <i class="bi bi-wifi display-4 text-danger"></i>

                        <h4 class="fw-bold mt-3">

                            Wireless Charger

                        </h4>

                        <p class="text-muted">

                            Mengisi daya smartphone lebih praktis
                            tanpa menggunakan kabel.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg h-100">

                    <div class="card-body text-center p-4">

                        <i class="bi bi-sun display-4 text-danger"></i>

                        <h4 class="fw-bold mt-3">

                            Panoramic Sunroof

                        </h4>

                        <p class="text-muted">

                            Memberikan kesan kabin lebih luas,
                            terang, dan nyaman selama perjalanan.

                        </p>

                    </div>

                </div>

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

                Galeri Chery Tiggo 8 Pro

            </h2>

            <p class="text-muted">

                Jelajahi desain eksterior dan interior Chery Tiggo 8 Pro
                dari berbagai sudut.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">

                <img
                    src="{{ asset('images/chery/tiggo8-gallery1.jpg') }}"
                    class="img-fluid rounded-4 shadow w-100"
                    style="height:260px; object-fit:cover;"
                    alt="Gallery 1">

            </div>

            <div class="col-lg-4 col-md-6">

                <img
                    src="{{ asset('images/chery/tiggo8-gallery2.jpg') }}"
                    class="img-fluid rounded-4 shadow w-100"
                    style="height:260px; object-fit:cover;"
                    alt="Gallery 2">

            </div>

            <div class="col-lg-4 col-md-6">

                <img
                    src="{{ asset('images/chery/tiggo8-gallery3.jpg') }}"
                    class="img-fluid rounded-4 shadow w-100"
                    style="height:260px; object-fit:cover;"
                    alt="Gallery 3">

            </div>

            <div class="col-lg-6 col-md-6">

                <img
                    src="{{ asset('images/chery/tiggo8-gallery4.jpg') }}"
                    class="img-fluid rounded-4 shadow w-100"
                    style="height:320px; object-fit:cover;"
                    alt="Gallery 4">

            </div>

            <div class="col-lg-6 col-md-6">

                <img
                    src="{{ asset('images/chery/tiggo8-gallery5.jpg') }}"
                    class="img-fluid rounded-4 shadow w-100"
                    style="height:320px; object-fit:cover;"
                    alt="Gallery 5">

            </div>

        </div>

    </div>

</section>

<!-- ================= VIDEO PROMO ================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                VIDEO

            </span>

            <h2 class="display-5 fw-bold">

                Video Chery Tiggo 8 Pro

            </h2>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="ratio ratio-16x9 rounded overflow-hidden shadow">

                    <iframe
                        src="https://www.youtube.com/embed/rHVOUnTo9aA"
                        title="Chery Tiggo 8 Pro"
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

        <div class="row g-4 text-center">

            <div class="col-lg-3 col-md-6">

                <div class="p-4 shadow rounded h-100">

                    <i class="bi bi-car-front-fill display-5 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Desain Modern

                    </h5>

                    <p class="text-muted">

                        Tampilan premium yang elegan dan futuristik.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="p-4 shadow rounded h-100">

                    <i class="bi bi-fuel-pump-fill display-5 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Efisien

                    </h5>

                    <p class="text-muted">

                        Performa tinggi dengan konsumsi bahan bakar optimal.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="p-4 shadow rounded h-100">

                    <i class="bi bi-shield-lock-fill display-5 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Keamanan

                    </h5>

                    <p class="text-muted">

                        Teknologi keselamatan aktif dan pasif yang lengkap.

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="p-4 shadow rounded h-100">

                    <i class="bi bi-award-fill display-5 text-danger"></i>

                    <h5 class="fw-bold mt-3">

                        Premium

                    </h5>

                    <p class="text-muted">

                        Material interior berkualitas tinggi dan nyaman.

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
                    src="{{ asset('images/chery/interior.jpg') }}"
                    class="img-fluid rounded-4 shadow-lg w-100"
                    alt="Interior Tiggo 8 Pro">

            </div>

            <div class="col-lg-6">

                <span class="text-danger fw-bold">

                    INTERIOR PREMIUM

                </span>

                <h2 class="display-5 fw-bold my-3">

                    Kabin Mewah dan Nyaman

                </h2>

                <p class="text-muted">

                    Chery Tiggo 8 Pro menawarkan kabin premium dengan
                    material soft touch, panoramic sunroof,
                    ambient light, serta ruang yang luas
                    untuk seluruh anggota keluarga.

                </p>

                <div class="row mt-4">

                    <div class="col-6 mb-3">

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

                    <div class="col-6 mb-3">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-danger fs-4 me-2"></i>

                            <div>

                                <h6 class="fw-bold">

                                    Panoramic Roof

                                </h6>

                                <small class="text-muted">

                                    Sunroof elektrik

                                </small>

                            </div>

                        </div>

                    </div>

                    <div class="col-6 mb-3">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-danger fs-4 me-2"></i>

                            <div>

                                <h6 class="fw-bold">

                                    Dual Screen

                                </h6>

                                <small class="text-muted">

                                    Dashboard digital

                                </small>

                            </div>

                        </div>

                    </div>

                    <div class="col-6 mb-3">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-danger fs-4 me-2"></i>

                            <div>

                                <h6 class="fw-bold">

                                    Wireless Charger

                                </h6>

                                <small class="text-muted">

                                    Fast Charging

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
                    src="{{ asset('images/chery/exterior.jpg') }}"
                    class="img-fluid rounded-4 shadow-lg w-100"
                    alt="Eksterior Tiggo 8 Pro">

            </div>

            <div class="col-lg-6 order-lg-1">

                <span class="text-danger fw-bold">

                    EKSTERIOR MODERN

                </span>

                <h2 class="display-5 fw-bold my-3">

                    Tampil Elegan di Setiap Perjalanan

                </h2>

                <p class="text-muted">

                    Garis bodi yang tegas dipadukan
                    dengan grille besar, LED Headlamp,
                    velg alloy modern,
                    serta desain aerodinamis
                    membuat Tiggo 8 Pro tampil lebih premium.

                </p>

                <ul class="list-group list-group-flush mt-4">

                    <li class="list-group-item">

                        ✔ Diamond Front Grille

                    </li>

                    <li class="list-group-item">

                        ✔ Full LED Headlamp

                    </li>

                    <li class="list-group-item">

                        ✔ LED DRL

                    </li>

                    <li class="list-group-item">

                        ✔ Electric Tailgate

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

                Performa Mesin Turbo

            </h2>

        </div>

        <div class="row text-center">

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    1.6L

                </h2>

                <p>

                    Turbo Engine

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    197 HP

                </h2>

                <p>

                    Maximum Power

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    290 Nm

                </h2>

                <p>

                    Maximum Torque

                </p>

            </div>

            <div class="col-lg-3 col-6 mb-4">

                <h2 class="fw-bold text-danger">

                    DCT

                </h2>

                <p>

                    7-Speed Transmission

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

                Chery Tiggo 8 Pro

            </h2>

            <p class="text-muted">

                Spesifikasi utama Chery Tiggo 8 Pro.

            </p>

        </div>

        <div class="row">

            <div class="col-lg-10 mx-auto">

                <div class="table-responsive shadow rounded">

                    <table class="table table-striped table-hover align-middle mb-0">

                        <tbody>

                            <tr>

                                <th width="35%">Tipe Mesin</th>

                                <td>1.6L TGDI Turbo Petrol Engine</td>

                            </tr>

                            <tr>

                                <th>Jumlah Silinder</th>

                                <td>4 Silinder DOHC</td>

                            </tr>

                            <tr>

                                <th>Kapasitas Mesin</th>

                                <td>1.598 cc</td>

                            </tr>

                            <tr>

                                <th>Tenaga Maksimum</th>

                                <td>197 PS</td>

                            </tr>

                            <tr>

                                <th>Torsi Maksimum</th>

                                <td>290 Nm</td>

                            </tr>

                            <tr>

                                <th>Transmisi</th>

                                <td>7-Speed Dual Clutch Transmission (DCT)</td>

                            </tr>

                            <tr>

                                <th>Sistem Penggerak</th>

                                <td>Front Wheel Drive (FWD)</td>

                            </tr>

                            <tr>

                                <th>Kapasitas Tangki</th>

                                <td>51 Liter</td>

                            </tr>

                            <tr>

                                <th>Kapasitas Penumpang</th>

                                <td>7 Orang</td>

                            </tr>

                            <tr>

                                <th>Velg</th>

                                <td>18 Inch Alloy Wheel</td>

                            </tr>

                            <tr>

                                <th>Suspensi Depan</th>

                                <td>MacPherson Strut</td>

                            </tr>

                            <tr>

                                <th>Suspensi Belakang</th>

                                <td>Multi-Link Independent</td>

                            </tr>

                            <tr>

                                <th>Rem Depan</th>

                                <td>Ventilated Disc</td>

                            </tr>

                            <tr>

                                <th>Rem Belakang</th>

                                <td>Disc Brake</td>

                            </tr>

                            <tr>

                                <th>Bahan Bakar</th>

                                <td>Bensin</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= FITUR KESELAMATAN ================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-danger fw-bold">

                SAFETY

            </span>

            <h2 class="display-5 fw-bold">

                Fitur Keselamatan

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h4 class="fw-bold">

                            Active Safety

                        </h4>

                        <ul class="mb-0">

                            <li>ABS + EBD</li>

                            <li>Brake Assist</li>

                            <li>ESC</li>

                            <li>Traction Control</li>

                            <li>Hill Start Assist</li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h4 class="fw-bold">

                            Passive Safety

                        </h4>

                        <ul class="mb-0">

                            <li>6 Airbags</li>

                            <li>ISOFIX</li>

                            <li>Seat Belt Reminder</li>

                            <li>Child Safety Lock</li>

                            <li>High Strength Body</li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h4 class="fw-bold">

                            Smart Technology

                        </h4>

                        <ul class="mb-0">

                            <li>360 Camera</li>

                            <li>Adaptive Cruise Control</li>

                            <li>Lane Departure Warning</li>

                            <li>Blind Spot Detection</li>

                            <li>Automatic Emergency Brake</li>

                        </ul>

                    </div>

                </div>

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

                Pilih warna favorit Anda untuk Chery Tiggo 8 Pro.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/white.jpg') }}"
                         class="card-img-top"
                         alt="White">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            White Howlite

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/black.jpg') }}"
                         class="card-img-top"
                         alt="Black">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Black Platinum

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/grey.jpg') }}"
                         class="card-img-top"
                         alt="Grey">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Grey Morganite

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow">

                    <img src="{{ asset('images/chery/colors/blue.jpg') }}"
                         class="card-img-top"
                         alt="Blue">

                    <div class="card-body text-center">

                        <h5 class="fw-bold">

                            Tech Blue

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

                    Promo Bulan Ini

                </h2>

                <p class="lead">

                    Nikmati berbagai keuntungan untuk pembelian
                    Chery Tiggo 8 Pro.

                </p>

                <ul class="list-unstyled fs-5">

                    <li class="mb-2">

                        ✅ DP Mulai 15%

                    </li>

                    <li class="mb-2">

                        ✅ Cicilan Ringan

                    </li>

                    <li class="mb-2">

                        ✅ Gratis Jasa Service

                    </li>

                    <li class="mb-2">

                        ✅ Bonus Kaca Film

                    </li>

                    <li>

                        ✅ Bonus Karpet & Aksesoris

                    </li>

                </ul>

            </div>

            <div class="col-lg-5 text-center">

                <img src="{{ asset('images/chery/promo.png') }}"
                     class="img-fluid"
                     alt="Promo">

            </div>

        </div>

    </div>

</section>

<!-- ================= SIMULASI ================= -->

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

        <div class="row text-center">

            <div class="col-lg-4 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h5 class="fw-bold">

                            DP

                        </h5>

                        <h2 class="text-danger">

                            15%

                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

                        <h5 class="fw-bold">

                            Cicilan

                        </h5>

                        <h2 class="text-danger">

                            Mulai 4 Juta/Bulan

                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 mb-4">

                <div class="card border-0 shadow h-100">

                    <div class="card-body">

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

                <img src="{{ asset('images/chery/contact.png') }}"
                     class="img-fluid"
                     alt="Hubungi Sales">

            </div>

            <div class="col-lg-6">

                <span class="text-danger fw-bold">

                    HUBUNGI SALES

                </span>

                <h2 class="display-5 fw-bold mb-4">

                    Minta Penawaran Terbaik

                </h2>

                <form>

                    <div class="mb-3">

                        <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Nama Lengkap">

                    </div>

                    <div class="mb-3">

                        <input
                            type="text"
                            class="form-control form-control-lg"
                            placeholder="Nomor WhatsApp">

                    </div>

                    <div class="mb-3">

                        <input
                            type="email"
                            class="form-control form-control-lg"
                            placeholder="Email">

                    </div>

                    <div class="mb-3">

                        <textarea
                            class="form-control"
                            rows="5"
                            placeholder="Pesan"></textarea>

                    </div>

                    <button class="btn btn-danger btn-lg w-100">

                        Kirim Penawaran

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- ================= CTA ================= -->

<section class="py-5 bg-danger text-white">

    <div class="container text-center">

        <h2 class="display-5 fw-bold">

            Siap Memiliki Chery Tiggo 8 Pro?

        </h2>

        <p class="lead mt-3">

            Hubungi Sales Kami Sekarang dan Dapatkan Promo Terbaik Hari Ini.

        </p>

        <a href="https://wa.me/6281234567890"
           target="_blank"
           class="btn btn-light btn-lg mt-3">

            <i class="bi bi-whatsapp"></i>

            Chat WhatsApp

        </a>

    </div>

</section>



<!-- ================= FLOATING WHATSAPP ================= -->

<a href="https://wa.me/6281234567890"
   target="_blank"
   class="btn btn-success rounded-circle shadow position-fixed"
   style="bottom:25px;right:25px;width:60px;height:60px;
          display:flex;align-items:center;
          justify-content:center;z-index:999;">

    <i class="bi bi-whatsapp fs-2"></i>

</a>

@endsection