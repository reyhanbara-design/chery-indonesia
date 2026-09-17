@extends('layouts.app')

@section('title', 'Promo Chery')

@section('content')

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-danger mb-3">
                PROMO CHERY
            </span>

            <h1 class="fw-bold">
                Promo dan Penawaran Terbaik
            </h1>

            <p class="text-secondary">
                Dapatkan berbagai penawaran menarik untuk kendaraan Chery
                pilihan Anda.
            </p>

        </div>

        <div class="row g-4">

            <!-- PROMO 1 -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                    <img src="{{ asset('images/chery/omoda5/omoda5-1.png') }}"
                         class="card-img-top product-image"
                         alt="Promo Chery OMODA 5">

                    <div class="card-body p-4">

                        <span class="badge bg-danger mb-3">
                            OMODA 5
                        </span>

                        <h4 class="fw-bold">
                            Penawaran Spesial OMODA 5
                        </h4>

                        <p class="text-secondary">
                            Dapatkan penawaran menarik untuk OMODA 5 dan wujudkan mobil impian Anda!
                        </p>

                        <a href="{{ route('chery.mobil.omoda5') }}" class="btn btn-primary">
    Lihat OMODA 5
</a>

                    </div>

                </div>

            </div>


            <!-- PROMO 2 -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                    <img src="{{ asset('images/chery/tiggo8/tiggo88-1.jpg') }}"
                         class="card-img-top product-image"
                         alt="Promo Chery Tiggo 8 Pro">

                    <div class="card-body p-4">

                        <span class="badge bg-danger mb-3">
                            TIGGO 8 PRO
                        </span>

                        <h4 class="fw-bold">
                            Paket Keluarga Tiggo 8 Pro
                        </h4>

                        <p class="text-secondary">
                            Nikmati kenyamanan maksimal bersama keluarga dengan penawaran spesial Tiggo 8 Pro.

                        <a href="{{ route('chery.mobil.tiggo8') }}" class="btn btn-primary">
    Lihat Tiggo 8 Pro
</a>

                    </div>

                </div>

            </div>


            <!-- PROMO 3 -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                    <img src="{{ asset('images/chery/omoda5/omoda55-2.jpg') }}"
                         class="card-img-top product-image"
                         alt="Konsultasi Chery">

                    <div class="card-body p-4">

                        <span class="badge bg-danger mb-3">
                            KONSULTASI
                        </span>

                        <h4 class="fw-bold">
                            Konsultasi Pembelian Mobil
                        </h4>

                        <p class="text-secondary">
                            Bingung memilih mobil? Konsultasikan kebutuhan Anda bersama sales kami secara mudah dan terpercaya.

                        <a href="{{ route('chery.kontak') }}"
                           class="btn btn-danger">
                            Hubungi Sales
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="py-5 bg-dark text-white">

    <div class="container text-center">

        <h2 class="fw-bold mb-3">
            Ingin Mengetahui Promo Terbaru?
        </h2>

        <p class="text-light mb-4">
            Hubungi sales Chery untuk mendapatkan informasi penawaran
            yang sesuai dengan kebutuhan Anda.
        </p>

        <a href="{{ route('chery.kontak') }}"
           class="btn btn-danger btn-lg px-4">
            Hubungi Sales
        </a>

    </div>

</section>

@endsection