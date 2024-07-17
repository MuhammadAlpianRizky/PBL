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
                <h1>Service Ac</h1>
            </div>
            <div class="services-section">
                <div class="service-card-service-ac">
                    <img src="img/service.png" alt="Service Icon" class="mobile-image">
                    <h2>SERVICE / PERBAIKAN AC</h2>
                    <div>
                    <p><a href="#"> Service AC Banjarmasin</a> – Kami Jasa Service AC Terbaik Profesional Berpengalaman Di Banjarmasin Dan Sekitarnya. Melayani Service / Reparasi / Perbaikan Spesialis Permasalahan Seputar AC.
                    </div>
                    <div>
                        <p>Perbaikan Masalah AC Tidak Dingin, AC Mati Total, AC Berisik, AC Berbau Tidak Sedap, AC Bocor, Perbaikan Exhaust AC Yang Berkaitan Dengan Freon, Saluran, Sensor, Termostat, Drainase, Modul Elektronik, Remote AC Dan Lain-Lain. Percakan Pada Kami, Ahlinya Dibidang Service AC Di Banjarmasin. Dengan Harga Terjangkau Jangan Ragukan Jasa Layanan Service AC Banjarmasin, Karena Service AC Banjarmasin Memberikan Jaminan Layanan Terbaik Dan GARANSI Dalam Setiap Layanan Pekerjaan.</p>
                    </div>
                    <div>
                        <p><a href="#">Service AC Banjarmasin</a>. Sekarang Tidak Lagi Bingung Dengan JASA SERVICE AC Rumah Anda, Serahkan Pada Ahlinya Karena Ada <a href="#">Akhmad Service AC</a>. Merupakan Jasa Profesional Yang Siap Melayani Dan Mengatasi Semua Permasalahan AC  Di Rumah Anda. Kami Berupaya Membuat Nyaman Hunian Anda Dari Persoalan AC Yang Mengalami Kerusakan.
                        </p>
                    </div>
                    <div>
                        <h2 class="ac2">Jenis Layanan Service AC Banjarmasin Antara Lain :</h2>
                    </div>
                        
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            SPLIT WALL MOUNTED</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            AC WINDOW</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            CASSETE</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            FLOOR STANDING</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            SPLIT DUCT</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            CEILING SUSPENDED</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            AC CENTRAL</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            AC Multi (VRV, VRF, DMV, Multi V)</p>
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
                    <a href="https://wa.me/+6285257173686" class="whatsapp-button">
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
