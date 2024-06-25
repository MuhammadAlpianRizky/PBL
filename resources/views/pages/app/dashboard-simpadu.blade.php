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
  
    /* <style>
  .main-content {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .section {
    display: flex;
    flex-direction: column;
  } */



        /* .service-card3 {
            background-color: rgba(247, 247, 247, 0.886); 
            background-image: linear-gradient(to bottom right, #e8e2de, #26a86e);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: inline-block;
            max-width: 500px;
            margin: 20px;
            border: none;
        } */

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
                    <img src="img/bongkar.png" alt="Installation Icon" class="mobile-image">
                    <h2>BONGKAR PASANG AC</h2>
                    <p>Cari jasa pasang AC baru atau perlu bongkar AC untuk dipindahkan ke tempat lain? Kami  siap bantu bongkar pasang AC termasuk mobilisasi AC ke lokasi baru. Dijamin Terpercaya.</p>
                </div>
                <div class="service-card">
                    <img src="img/sales.png" alt="Sales Icon" class="mobile-image">
                    <h2>PENJUALAN AC BEKAS</h2>
                    <p>Anda membutuhkan AC bekas untuk rumah atau kantor? Di web kami melayani penjualan AC bekas harga terjangkau, berkualitas dan bergaransi (by request).</p>
                </div>
                <div class="service-card">
                    <img src="img/tambahfreon2.png" alt="Fridge Icon" class="mobile-image">
                    <h2>TAMBAH FREON AC Banjarmasin</h2>
                    <p>Rasakan kembali kesejukan ruangan dengan tambah freon dari kami. 
                        AC Anda akan lebih dingin dan sejuk, hemat biaya listrik, dan menciptakan ruangan yang nyaman.</p>
                </div>
            </div>
        </section>
    </div>
</body>

 <div class="main-content">
    <div class="service-card5">
        <section class="section">
            <div class="section-header4">
            <h1 class="custom-title">MENERIMA SERVICE AC SEMUA MERK</h1>
            </div>
            <div class="service-card5">
                <img src="{{ asset('img/Logo-LG.png') }}" alt="Brand Logo" >
                <img src="{{ asset('img/Logo-Daikin.png') }}" alt="Brand Logo" >
                <img src="{{ asset('img/Logo-Panasonic.png') }}" alt="Brand Logo" >
                <img src="{{ asset('img/Logo-SHARP.png') }}" alt="Brand Logo" >
                <img src="{{ asset('img/Logo-Samsung.png') }}" alt="Brand Logo" >
            </div>
    </div>
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
                    <p>Melayani wilayah Banjarmasin dan sekitarnya.</p>
                </div>
            </div>
        </section>
    </div>
    <div class="main-content">
        <section class="section">
            <div class="services-section3">
                <div class="service-card3">
                    <h2>HUBUNGI SEGERA</h2>
                    <h3>UNTUK ANDA YANG MENGINGINKAN PELAYANAN JASA SERVICE TERBAIK KAMI</h3>
                    <h4>Kami selalu menawarkan jasa service dan sebagainya dengan harga terjangkau, profesional, dan bergaransi.</h4>
                    <a href="https://wa.me/+6281905033770" class="whatsapp-button">
                        <img src="{{ asset('img/phone.png') }}" alt="Service Icon">
                        ORDER SERVICE AC
                    
                    </a>
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
