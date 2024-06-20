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
    @media (max-width: 1024px) {
    .services-section2 {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Media query untuk mobile */
@media (max-width: 700px) {
    .services-section2 {
        grid-template-columns: 1fr;
    }
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

        .service-card3 img {
            max-width: 100px;
            
        }

.service-card3 h2 {
    font-size: 2.5em;
    margin-bottom: 10px;
    font-weight: bold; /*Mengatur tebal*/
    text-shadow: 2px 2px 4px rgba(42, 42, 42, 0.5); 
    background-image: linear-gradient(45deg, #0b70e2,#ff0000); /* Gradient CSS */
        -webkit-background-clip: text; /* Untuk WebKit (Safari, Chrome) */
        background-clip: text; /* Untuk browser modern lainnya */
        color: transparent;
}

.service-card3 h3 {
    font-size: 2em;
    margin-bottom: 10px;
    background-image: linear-gradient(45deg,#0b70e2, #ff0000); /* Gradient CSS */
        -webkit-background-clip: text; /* Untuk WebKit (Safari, Chrome) */
        background-clip: text; /* Untuk browser modern lainnya */
        color: transparent;
}

.service-card3 h4 {
    font-size: 1em;
    margin-bottom: 20px;
}

        .whatsapp-button {
            display: inline-flex;
            background-color: #25D366; /* WhatsApp green */
            color: #fff;
            padding: 15px ;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease to ease-out;
            align-items: center;
            
            
        }

        .whatsapp-button:hover {
            transform: translateY(-10px);
            background-color: #1ebf5b;
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
            color: #000;
        }
        .whatsapp-button img {
    width: 40px; /* Adjust size as needed */
    height: auto;
    margin-right: 1px; /* Space between image and text */
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
                    <a href="https://wa.me/yourphonenumber" class="whatsapp-button">
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
