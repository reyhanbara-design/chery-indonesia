@extends('layouts.app')

@section('title', 'Mobil Chery')

@section('content')

<section class="py-5 bg-light">
    <div class="container py-4">

        <div class="text-center mb-5">
            <span class="text-danger fw-bold">
                PRODUK CHERY
            </span>

            <h1 class="fw-bold mt-2">
                Pilihan Mobil Chery
            </h1>

            <p class="text-muted">
                Temukan kendaraan yang sesuai dengan kebutuhan perjalanan
                dan keluarga Anda.
            </p>
        </div>

        <div class="row g-4">

            {{-- OMODA 5 --}}
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                    <img
                        src="{{ asset('images/chery/omoda5/omoda55-1.png') }}"
                        alt="Chery OMODA 5"
                        class="w-100 product-image"
                    >

                    <div class="card-body p-4">
                        <span class="badge bg-danger mb-2">
                            SUV MODERN
                        </span>

                        <h3 class="fw-bold">
                            Chery OMODA 5
                        </h3>

                        <p class="text-muted">
                            SUV modern dengan desain futuristik,
                            teknologi pintar, dan kenyamanan berkendara.
                        </p>

                        <a href="{{ route('chery.mobil.omoda5') }}" class="btn btn-primary">
    Lihat Detail
</a>
                        
                           
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>

            {{-- TIGGO 8 PRO --}}
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                    <img
                        src="{{ asset('images/chery/tiggo8/tiggo8-1.png') }}"
                        alt="Chery Tiggo 8 Pro"
                        class="w-100 product-image"
                    >

                    <div class="card-body p-4">
                        <span class="badge bg-danger mb-2">
                            SUV PREMIUM
                        </span>

                        <h3 class="fw-bold">
                            Chery Tiggo 8 Pro
                        </h3>

                        <p class="text-muted">
                            SUV premium dengan kabin luas,
                            fitur modern, dan kenyamanan untuk keluarga.
                        </p>

                        <a href="{{ route('chery.mobil.tiggo8') }}" class="btn btn-primary">
    Lihat Detail
</a>
                           
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection