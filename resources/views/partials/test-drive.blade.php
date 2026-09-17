<section id="test-drive" class="py-5 bg-dark text-white">
    <div class="container">

        <div class="text-center mb-5">
            <span class="badge bg-danger mb-3">
                TEST DRIVE
            </span>

            <h2 class="fw-bold">
                Jadwalkan Test Drive {{ $namaMobil }}
            </h2>

            <p class="text-light">
                Isi formulir berikut untuk menghubungi sales kami.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="bg-white text-dark rounded-4 shadow-lg p-4 p-md-5">
                    <div class="alert alert-success d-none test-drive-alert" role="alert">
    Formulir berhasil disiapkan. Anda akan diarahkan ke WhatsApp.
</div>

                    <form class="test-drive-form">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control form-control-lg"
                                placeholder="Masukkan nama lengkap"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nomor WhatsApp
                            </label>

                            <input
                                type="tel"
                                name="whatsapp"
                                class="form-control form-control-lg"
                                placeholder="Contoh: 081234567890"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Pilihan Mobil
                            </label>

                            <input
                                type="text"
                                name="mobil"
                                class="form-control form-control-lg"
                                value="{{ $namaMobil }}"
                                readonly
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Rencana Tanggal Test Drive
                            </label>

                            <input
                                type="date"
                                name="tanggal"
                                class="form-control form-control-lg"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Pesan Tambahan
                            </label>

                            <textarea
                                name="pesan"
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


    <script>
    document.querySelectorAll('.test-drive-form').forEach(function (form) {

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const nama = form.querySelector('[name="nama"]').value;
            const whatsapp = form.querySelector('[name="whatsapp"]').value;
            const mobil = form.querySelector('[name="mobil"]').value;
            const tanggal = form.querySelector('[name="tanggal"]').value;
            const pesan = form.querySelector('[name="pesan"]').value;

            const alertBox = form.parentElement.querySelector('.test-drive-alert');

            const nomorSales = '6281556863658';

            const isiPesan =
                'Halo Sales, saya ingin mengajukan test drive.%0A%0A' +
                'Nama: ' + encodeURIComponent(nama) + '%0A' +
                'Nomor WhatsApp: ' + encodeURIComponent(whatsapp) + '%0A' +
                'Pilihan Mobil: ' + encodeURIComponent(mobil) + '%0A' +
                'Tanggal Test Drive: ' + encodeURIComponent(tanggal) + '%0A' +
                'Pesan Tambahan: ' + encodeURIComponent(pesan || '-');

            const urlWhatsApp =
                'https://wa.me/' + nomorSales + '?text=' + isiPesan;

            alertBox.classList.remove('d-none');

            setTimeout(function () {
                window.open(urlWhatsApp, '_blank');
            }, 500);
        });

    });
</script>