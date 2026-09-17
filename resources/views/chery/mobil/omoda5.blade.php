@extends('layouts.app')

@section('title', 'Chery OMODA 5')

@section('content')

{{-- HERO DETAIL MOBIL --}}
<section class="py-5 bg-dark text-white">
    <div class="container py-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="badge bg-danger mb-3">
                    SUV PREMIUM
                </span>

                <h1 class="display-4 fw-bold">
                    Chery OMODA 5
                </h1>

                <p class="lead text-light">
                    SUV modern dengan desain futuristik, teknologi pintar,
                    kenyamanan maksimal, dan performa yang responsif.
                </p>

                <div class="d-flex flex-wrap gap-2 mt-4">
                    <a href="#test-drive" class="btn btn-danger btn-lg">
                        <i class="bi bi-car-front-fill me-2"></i>
                        Jadwalkan Test Drive
                    </a>

                    <a href="#gallery" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-images me-2"></i>
                        Lihat Gallery
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <img
                    src="{{ asset('images/chery/omoda5/omoda5-1.png') }}"
                    alt="Chery OMODA 5"
                    class="img-fluid rounded-4 shadow-lg"
                >
            </div>

        </div>
    </div>
</section>


{{-- INFORMASI SINGKAT --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center g-4">

            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <i class="bi bi-speedometer2 text-danger fs-1"></i>
                    <h5 class="fw-bold mt-3">Performa Responsif</h5>
                    <p class="text-muted mb-0">
                        Memberikan pengalaman berkendara yang nyaman
                        untuk perjalanan harian maupun perjalanan jauh.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <i class="bi bi-shield-check text-danger fs-1"></i>
                    <h5 class="fw-bold mt-3">Teknologi Keselamatan</h5>
                    <p class="text-muted mb-0">
                        Dilengkapi berbagai teknologi keselamatan untuk
                        meningkatkan rasa aman selama berkendara.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                    <i class="bi bi-stars text-danger fs-1"></i>
                    <h5 class="fw-bold mt-3">Desain Futuristik</h5>
                    <p class="text-muted mb-0">
                        Tampilan modern dan elegan yang cocok untuk
                        pengguna dengan gaya hidup aktif.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- GALLERY FOTO --}}
<section id="gallery" class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-danger fw-bold">
                GALLERY
            </span>

            <h2 class="fw-bold">
                Lihat Lebih Dekat Chery OMODA 5
            </h2>

            <p class="text-muted">
                Jelajahi desain eksterior dan interior Chery OMODA 5.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/omoda5/omoda55-1.jpg') }}"
                        alt="Chery OMODA 5 tampak depan"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/omoda5/omoda5-2.jpg') }}"
                        alt="Chery OMODA 5 tampak samping"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/omoda5/omoda5-3.jpg') }}"
                        alt="Chery OMODA 5 tampak belakang"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/omoda5/omoda5-4.jpg') }}"
                        alt="Interior Chery OMODA 5"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/omoda5/omoda5-5.jpg') }}"
                        alt="Dashboard Chery OMODA 5"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/omoda5/omoda5-6.jpg') }}"
                        alt="Kursi Chery OMODA 5"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

        </div>
    </div>
</section>


{{-- FITUR UNGGULAN --}}
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-danger fw-bold">
                FITUR UNGGULAN
            </span>

            <h2 class="fw-bold">
                Teknologi yang Mendukung Aktivitas Anda
            </h2>

            <p class="text-muted">
                Setiap fitur dirancang untuk memberikan kenyamanan,
                keamanan, dan kemudahan bagi penggunanya.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4 text-center">
                        <i class="bi bi-lightning-charge-fill text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Mesin Bertenaga
                        </h5>

                        <p class="text-muted">
                            Cocok untuk pengguna yang membutuhkan
                            performa responsif saat berkendara.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4 text-center">
                        <i class="bi bi-display text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Smart Display
                        </h5>

                        <p class="text-muted">
                            Membantu pengemudi mengakses informasi
                            kendaraan dan hiburan dengan lebih mudah.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4 text-center">
                        <i class="bi bi-shield-fill-check text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Sistem Keselamatan
                        </h5>

                        <p class="text-muted">
                            Ditujukan untuk pengguna yang mengutamakan
                            perlindungan selama perjalanan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4 text-center">
                        <i class="bi bi-car-front-fill text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Interior Premium
                        </h5>

                        <p class="text-muted">
                            Memberikan kenyamanan bagi keluarga maupun
                            pengguna yang sering melakukan perjalanan jauh.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- SPESIFIKASI MOBIL --}}
<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <span class="text-danger fw-bold">
                    SPESIFIKASI
                </span>

                <h2 class="fw-bold mt-2">
                    Detail Spesifikasi Chery OMODA 5
                </h2>

                <p class="text-muted">
                    Informasi berikut memberikan gambaran umum mengenai
                    karakteristik kendaraan. Spesifikasi dapat disesuaikan
                    dengan tipe dan varian yang tersedia.
                </p>

                <a href="#test-drive" class="btn btn-danger">
                    Konsultasikan dengan Sales
                </a>
            </div>

            <div class="col-lg-7">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">

                        <tbody>
                            <tr>
                                <th class="bg-light" width="40%">
                                    Tipe Kendaraan
                                </th>
                                <td>
                                    SUV
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Kapasitas Penumpang
                                </th>
                                <td>
                                    5 Penumpang
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Jenis Transmisi
                                </th>
                                <td>
                                    Otomatis
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Sistem Penggerak
                                </th>
                                <td>
                                    Roda Depan
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Sistem Hiburan
                                </th>
                                <td>
                                    Smart Display dan konektivitas digital
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Fitur Keselamatan
                                </th>
                                <td>
                                    Sistem bantuan keselamatan berkendara
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Interior
                                </th>
                                <td>
                                    Interior modern dan nyaman
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- TEST DRIVE --}}
<section id="test-drive" class="py-5 bg-dark text-white">
    <div class="container">

        <div class="row align-items-center g-4">

            <div class="col-lg-8">
                <span class="badge bg-danger mb-3">
                    TEST DRIVE
                </span>

                <h2 class="fw-bold">
                    Rasakan Langsung Pengalaman Berkendara
                </h2>

                <p class="text-light mb-0">
                    Jadwalkan test drive bersama sales kami dan
                    dapatkan informasi lengkap mengenai Chery OMODA 5.
                </p>
            </div>

            <div class="col-lg-4 text-lg-end">
                <a
                    href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20jadwal%20test%20drive%20Chery%20OMODA%205"
                    target="_blank"
                    class="btn btn-danger btn-lg"
                >
                    <i class="bi bi-whatsapp me-2"></i>
                    Jadwalkan Test Drive
                </a>
            </div>

        </div>

    </div>
</section>

@include('partials.test-drive', [
    'namaMobil' => 'Chery OMODA 5'
])

@endsection