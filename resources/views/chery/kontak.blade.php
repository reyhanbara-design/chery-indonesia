@extends('layouts.app')

@section('title', 'Kontak Chery')

@section('content')

<!-- HEADER -->
<section class="py-5 bg-dark text-white">

    <div class="container text-center">

        <span class="badge bg-danger mb-3">
            KONTAK KAMI
        </span>

        <h1 class="display-5 fw-bold mb-3">
            Hubungi Sales Chery
        </h1>

        <p class="lead text-light mb-0">
            Kami siap membantu memberikan informasi mengenai kendaraan,
            promo, kredit, dan jadwal test drive.
        </p>

    </div>

</section>


<!-- INFORMASI KONTAK -->
<section class="py-5">

    <div class="container">

        <div class="row g-4">

            <!-- INFORMASI -->
            <div class="col-lg-5">

                <span class="badge bg-danger mb-3">
                    INFORMASI SALES
                </span>

                <h2 class="fw-bold mb-3">
                    Mari Terhubung dengan Kami
                </h2>

                <p class="text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Silakan hubungi kami untuk mendapatkan informasi lebih
                    lanjut mengenai produk Chery.
                </p>

                <div class="d-flex gap-3 mb-4">

                    <div class="contact-icon">
                        <i class="bi bi-geo-alt-fill text-danger"></i>
                    </div>

                    <div>
                        <h6 class="fw-bold mb-1">
                            Alamat
                        </h6>

                        <p class="text-secondary mb-0">
                            Lorem ipsum, Indonesia
                        </p>
                    </div>

                </div>

                <div class="d-flex gap-3 mb-4">

                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill text-danger"></i>
                    </div>

                    <div>
                        <h6 class="fw-bold mb-1">
                            Nomor Telepon
                        </h6>

                        <p class="text-secondary mb-0">
                            0812-3456-7890
                        </p>
                    </div>

                </div>

                <div class="d-flex gap-3 mb-4">

                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill text-danger"></i>
                    </div>

                    <div>
                        <h6 class="fw-bold mb-1">
                            Email
                        </h6>

                        <p class="text-secondary mb-0">
                            info@cheryauto.com
                        </p>
                    </div>

                </div>

                <div class="d-flex gap-3 mb-4">

                    <div class="contact-icon">
                        <i class="bi bi-clock-fill text-danger"></i>
                    </div>

                    <div>
                        <h6 class="fw-bold mb-1">
                            Jam Pelayanan
                        </h6>

                        <p class="text-secondary mb-0">
                            Senin - Sabtu, 08.00 - 17.00
                        </p>
                    </div>

                </div>

                <a href="https://wa.me/6281234567890"
                   target="_blank"
                   rel="noopener"
                   class="btn btn-success btn-lg">

                    <i class="bi bi-whatsapp me-2"></i>
                    Chat WhatsApp

                </a>

            </div>


            <!-- FORM KONTAK -->
            <div class="col-lg-7">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-md-5">

                        <h3 class="fw-bold mb-2">
                            Kirim Pesan
                        </h3>

                       <p class="text-secondary mb-4">
    Isi formulir berikut dan sales kami akan
    menghubungi Anda.
</p>

<div class="alert alert-success d-none contact-alert" role="alert">
    <strong>Berhasil!</strong>
    Pesan berhasil disiapkan. Anda akan diarahkan ke WhatsApp.
</div>

<form class="contact-form">

                            <div class="row g-3">

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nama Lengkap
                                    </label>

                                    <input type="text"
                                           name="nama"
                                           class="form-control form-control-lg"
                                           placeholder="Masukkan nama lengkap"
                                           required>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nomor WhatsApp
                                    </label>

                                    <input type="tel"
                                           name="whatsapp"
                                           class="form-control form-control-lg"
                                           placeholder="081234567890"
                                           required>

                                </div>

                                <div class="col-12">

                                    <label class="form-label fw-semibold">
                                        Pilihan Mobil
                                    </label>

                                    <select name="mobil"
                                            class="form-select form-select-lg"
                                            required>

                                        <option value="">
                                            Pilih mobil
                                        </option>

                                        <option value="Chery OMODA 5">
                                            Chery OMODA 5
                                        </option>

                                        <option value="Chery Tiggo 8 Pro">
                                            Chery Tiggo 8 Pro
                                        </option>

                                    </select>

                                </div>

                                <div class="col-12">

                                    <label class="form-label fw-semibold">
                                        Pesan
                                    </label>

                                    <textarea name="pesan"
                                              class="form-control"
                                              rows="5"
                                              placeholder="Tuliskan pesan Anda"
                                              required></textarea>

                                </div>

                                <div class="col-12">

                                    <button type="submit"
                                            class="btn btn-danger btn-lg w-100">

                                        <i class="bi bi-send me-2"></i>
                                        Kirim Pesan

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- MAP PLACEHOLDER -->
<section class="pb-5">

    <div class="container">

        <div class="rounded-4 overflow-hidden shadow-sm">

            <iframe
                src="https://www.google.com/maps?q=Jakarta,Indonesia&output=embed"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</section>
<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.contact-form').forEach(function (form) {

        form.addEventListener('submit', function (event) {

            event.preventDefault();

            const nama = form.querySelector('[name="nama"]').value;
            const whatsapp = form.querySelector('[name="whatsapp"]').value;
            const mobil = form.querySelector('[name="mobil"]').value;
            const pesan = form.querySelector('[name="pesan"]').value;

            const alertBox = form.parentElement.querySelector('.contact-alert');

            const nomorSales = '6281556863658';

            const isiPesan =
                'Halo Sales Chery, saya ingin berkonsultasi.%0A%0A' +
                'Nama: ' + encodeURIComponent(nama) + '%0A' +
                'Nomor WhatsApp: ' + encodeURIComponent(whatsapp) + '%0A' +
                'Pilihan Mobil: ' + encodeURIComponent(mobil) + '%0A' +
                'Pesan: ' + encodeURIComponent(pesan);

            const urlWhatsApp =
                'https://wa.me/' + nomorSales + '?text=' + isiPesan;

            // Tampilkan notifikasi
            alertBox.classList.remove('d-none');

            // Scroll ke notifikasi
            alertBox.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });

            // Buka WhatsApp setelah 1 detik
            setTimeout(function () {
                window.open(urlWhatsApp, '_blank');
            }, 1000);

        });

    });

});
</script>
@endsection