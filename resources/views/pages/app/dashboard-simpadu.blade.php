@extends('layouts.app')


@section('title', 'Services')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <style>
    
        
    </style>
@endpush

<style>
    .services-section2 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        /* background: url('{{ asset('img/image.png') }}') no-repeat center center;
        background-size: cover; */
        padding: 50px 0;
    }
    <style>
  .main-content {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .section {
    display: flex;
    flex-direction: column;
  }
    
</style>

@section('main')
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Services</h1>
            </div>
            <div class="services-section">
                <div class="service-card">
                    <img src="img/service.png" alt="Service Icon" class="mobile-image">
                    <h2>SERVICE / PERBAIKAN AC</h2>
                    <p>Siap berikan layanan terbaik untuk service AC Anda mulai dari Cuci AC, cek pressure freon, isi freon AC, hingga cek kondisi module dan parts. Siap perbaiki kerusakan AC ringan maupun berat sampai tuntas.</p>
                </div>
                <div class="service-card">
                    <img src="img/bongkar-pasang.png" alt="Installation Icon" class="mobile-image">
                    <h2>BONGKAR PASANG AC</h2>
                    <p>Cari jasa pasang AC baru atau perlu bongkar AC untuk dipindahkan ke tempat lain? Kami  siap bantu bongkar pasang AC termasuk mobilisasi AC ke lokasi baru. Dijamin Terpercaya.</p>
                </div>
                <div class="service-card">
                    <img src="img/sales.png" alt="Sales Icon" class="mobile-image">
                    <h2>PENJUALAN AC BEKAS</h2>
                    <p>Anda membutuhkan AC bekas untuk rumah atau kantor? Di web kami melayani penjualan AC bekas harga terjangkau, berkualitas dan bergaransi (by request).</p>
                </div>
                <div class="service-card">
                    <img src="img/kulkas.png" alt="Fridge Icon" class="mobile-image">
                    <h2>SERVICE KULKAS</h2>
                    <p>Solusi Tepat Bagi Anda Yang Mengalami Masalah Dengan Lemari Es 1 Pintu, 2 Pintu Dan Mesin Refrigerator Lainnya Seperti Chiller, Freezer Dan Showcase Dari Berbagai Merk Dan Type.</p>
                </div>
            </div>
        </section>
    </div>
</body>
    <div class="main-content">
        <section class="section">
            <div class="section-header2">
                <h1>Service Experience</h1>
            </div>
            <div class="services-section2">
                <div class="service-card2">
                    <img src="{{ asset('img/fastrespon.png') }}" alt="Service Icon">
                    <h2>Respon Cepat</h2>
                    <p>Respon cepat dalam pelayanan panggilan service dan lainnya sesuai kebutuhan pelanggan.</p>
                </div>
                <div class="service-card2">
                    <img src="{{ asset('img/terjangkau.png') }}" alt="Service Icon">
                    <h2>Terjangkau</h2>
                    <p>Kami tidak mematok harga tinggi tapi harga yang terjangkau semua kalangan & mengutamakan kualitas dalam bekerja.</p>
                </div>
                <div class="service-card2">
                    <img src="{{ asset('img/profesional.png') }}" alt="Service Icon">
                    <h2>Teknisi Handal</h2>
                    <p>Kami mempunyai teknisi dan helper yang handal dan ahli bidang pendingin untuk hasil yang berkualitas dan tuntas.</p>
                </div>
                <div class="service-card2">
                    <img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                    <h2>Layanan Lengkap</h2>
                    <p>Solusi lengkap di satu tempat untuk solusi perawatan pemeliharaan dan perbaikan AC Anda.</p>
                </div>
                <div class="service-card2">
                    <img src="{{ asset('img/garansi.png') }}" alt="Service Icon">
                    <h2>Bergaransi</h2>
                    <p>Kami memberikan garansi atas jasa pekerjaan yang kami lakukan. Tak perlu khawatir.</p>
                </div>
                <div class="service-card2">
                    <img src="{{ asset('img/luas.png') }}" alt="Service Icon">
                    <h2>Jangkauan Luas</h2>
                    <p>Melayani wilayah Jogja Kota, Sleman, Bantul, Kulon Progo dan daerah sekitarnya.</p>
                </div>
            </div>
        </section>
    </div>
@endsection



@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
