@extends('layouts.app')

@section('title', 'Chery Tiggo 8 Pro')

@section('content')

{{-- HERO --}}
<section class="py-5 bg-dark text-white">
    <div class="container py-5">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="badge bg-danger mb-3">
                    SUV PREMIUM
                </span>

                <h1 class="display-4 fw-bold">
                    Chery Tiggo 8 Pro
                </h1>

                <p class="lead text-light">
                    SUV premium dengan ruang kabin luas, desain elegan,
                    teknologi modern, dan kenyamanan untuk seluruh keluarga.
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
                    src="{{ asset('images/chery/tiggo8/tiggo88-1.png') }}"
                    alt="Chery Tiggo 8 Pro"
                    class="img-fluid rounded-4 shadow-lg w-100"
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
                <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <i class="bi bi-people-fill text-danger fs-1"></i>

                    <h5 class="fw-bold mt-3">
                        Kabin Luas
                    </h5>

                    <p class="text-muted mb-0">
                        Memberikan ruang yang nyaman untuk keluarga
                        dan perjalanan bersama.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <i class="bi bi-shield-check text-danger fs-1"></i>

                    <h5 class="fw-bold mt-3">
                        Keselamatan Modern
                    </h5>

                    <p class="text-muted mb-0">
                        Dilengkapi teknologi keselamatan untuk
                        membantu meningkatkan perlindungan berkendara.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <i class="bi bi-gem text-danger fs-1"></i>

                    <h5 class="fw-bold mt-3">
                        Kenyamanan Premium
                    </h5>

                    <p class="text-muted mb-0">
                        Interior modern dengan berbagai fitur
                        yang mendukung kenyamanan penumpang.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

</section>
{{-- GALLERY FOTO --}}
<section id="gallery" class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-danger fw-bold">
                GALLERY
            </span>

            <h2 class="fw-bold">
                Lihat Lebih Dekat Chery TIGGO 8
            </h2>

            <p class="text-muted">
                Jelajahi desain eksterior dan interior Chery TIGGO 8
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/tiggo8/tiggo8-1.png') }}"
                        alt="Chery TIGGO 8 tampak depan"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/tiggo8/tiggo8-2.jpg') }}"
                        alt="Chery TIGGO 8 tampak samping"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/tiggo8/tiggo8-3.jpg') }}"
                        alt="Chery TIGGO 8 tampak belakang"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/tiggo8/tiggo8-4.jpg') }}"
                        alt="Interior Chery TIGGO 8"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/tiggo8/tiggo8-5.jpg') }}"
                        alt="Dashboard Chery TIGGO 8"
                        class="img-fluid rounded-4 shadow-sm w-100"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item">
                    <img
                        src="{{ asset('images/chery/tiggo8/tiggo8-6.jpg') }}"
                        alt="Kursi Chery TIGGO 8"
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

            <h2 class="fw-bold mt-2">
                Fitur untuk Kenyamanan Keluarga
            </h2>

            <p class="text-muted">
                Dirancang untuk memberikan pengalaman berkendara
                yang nyaman dan praktis.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-lightning-charge-fill text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Performa Bertenaga
                        </h5>

                        <p class="text-muted mb-0">
                            Mendukung perjalanan harian dan perjalanan
                            bersama keluarga.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-display text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Layar Pintar
                        </h5>

                        <p class="text-muted mb-0">
                            Membantu pengemudi mengakses informasi
                            dan hiburan kendaraan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-shield-fill-check text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Fitur Keselamatan
                        </h5>

                        <p class="text-muted mb-0">
                            Membantu meningkatkan rasa aman selama
                            berkendara bersama keluarga.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-person-hearts text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Interior Nyaman
                        </h5>

                        <p class="text-muted mb-0">
                            Ruang kabin dirancang untuk memberikan
                            kenyamanan kepada pengemudi dan penumpang.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- SPESIFIKASI --}}
<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">
                <span class="text-danger fw-bold">
                    SPESIFIKASI
                </span>

                <h2 class="fw-bold mt-2">
                    Spesifikasi Chery Tiggo 8 Pro
                </h2>

                <p class="text-muted">
                    Berikut merupakan informasi umum kendaraan.
                    Detail spesifikasi dapat berbeda berdasarkan
                    varian yang tersedia.
                </p>

                <a href="#test-drive" class="btn btn-danger">
                    Konsultasi dengan Sales
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
                                    SUV Premium
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Kapasitas Penumpang
                                </th>
                                <td>
                                    7 Penumpang
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
                                    Teknologi bantuan keselamatan berkendara
                                </td>
                            </tr>

                            <tr>
                                <th class="bg-light">
                                    Interior
                                </th>
                                <td>
                                    Interior luas dan modern
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

        <div class="text-center mb-5">
            <span class="badge bg-danger mb-3">
                TEST DRIVE
            </span>

            <h2 class="fw-bold">
                Jadwalkan Test Drive
            </h2>

            <p class="text-light">
                Isi formulir berikut untuk menghubungi sales Chery.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="bg-white text-dark rounded-4 shadow-lg p-4 p-md-5">

                    <form id="testDriveForm">

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-semibold">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                id="nama"
                                class="form-control form-control-lg"
                                placeholder="Masukkan nama lengkap"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="whatsapp" class="form-label fw-semibold">
                                Nomor WhatsApp
                            </label>

                            <input
                                type="tel"
                                id="whatsapp"
                                class="form-control form-control-lg"
                                placeholder="Contoh: 081234567890"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="mobil" class="form-label fw-semibold">
                                Pilihan Mobil
                            </label>

                            <select
                                id="mobil"
                                class="form-select form-select-lg"
                                required
                            >
                                <option value="">
                                    Pilih mobil
                                </option>

                                <option value="Chery Tiggo 8 Pro">
                                    Chery Tiggo 8 Pro
                                </option>

                                <option value="Chery OMODA 5">
                                    Chery OMODA 5
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label fw-semibold">
                                Rencana Tanggal Test Drive
                            </label>

                            <input
                                type="date"
                                id="tanggal"
                                class="form-control form-control-lg"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label for="pesan" class="form-label fw-semibold">
                                Pesan Tambahan
                            </label>

                            <textarea
                                id="pesan"
                                class="form-control"
                                rows="4"
                                placeholder="Tuliskan pertanyaan atau permintaan tambahan"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-danger btn-lg w-100"
                        >
                            <i class="bi bi-whatsapp me-2"></i>
                            Kirim ke WhatsApp
                        </button>

                    </form>

                </div>
            </div>
        </div>

    </div>
</section>

{{-- SCRIPT FORM TEST DRIVE --}}
<script>
    document
        .getElementById('testDriveForm')
        .addEventListener('submit', function (event) {

            event.preventDefault();

            const nama = document.getElementById('nama').value;
            const whatsapp = document.getElementById('whatsapp').value;
            const mobil = document.getElementById('mobil').value;
            const tanggal = document.getElementById('tanggal').value;
            const pesan = document.getElementById('pesan').value;

            const nomorSales = '6281234567890';

            const pesanWhatsApp =
                `Halo Sales Chery,%0A%0A` +
                `Saya ingin mengajukan test drive.%0A%0A` +
                `Nama: ${nama}%0A` +
                `Nomor WhatsApp: ${whatsapp}%0A` +
                `Pilihan Mobil: ${mobil}%0A` +
                `Tanggal Test Drive: ${tanggal}%0A` +
                `Pesan Tambahan: ${pesan || '-'}`;

            const urlWhatsApp =
                `https://wa.me/${nomorSales}?text=${pesanWhatsApp}`;

            window.open(urlWhatsApp, '_blank');
        });
</script>


@endsection