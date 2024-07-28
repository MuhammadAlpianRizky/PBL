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
                <h1>Tambah Freon AC</h1>
            </div>
            <div class="services-section">
                <div class="service-card-service-ac">
                    <img src="img/tambahfreon2.png" alt="Service Icon" class="mobile-image">
                    <h2>Tambah Freon Ac Banjarimasin</h2>
                    <div>
                    <p><a href="#"> Service AC Banjarmasin</a> – Kami Jasa Isi / Tambah Freon AC Terbaik Profesional Berpengalaman Di Banjarmasin Dan Daerah Sekitarnya.
                    </div>
                    <div>
                        <p>
                            Freon Adalah Senyawa Yang Dipakai Sebagai Bahan Bakar Yang Memperlancar Sistem Kerja Air Conditioner. 
                            Adanya Freon Berguna Untuk Membuat AC Menghasilkan Udara Yang Lebih Sejuk. Itu Artinya, AC Sangat Bergantung Pada Freon. 
                            Jadi, Ketika Tidak Ada Freon Maka AC Yang Ada Di Rumahmu Tidak Akan Mengeluarkan Udara Yang Dingin. 
                            Selain Itu, Freon Juga Berperan Sebagai Fluida Yang Selanjutnya Akan Menyerap Panas Maupun Kotor.
                        </p>
                    </div>
                    <div>
                    <P>
                        Fungsi Freon Adalah Untuk Bahan Bakar AC Yang Selanjutnya Akan Menghasilkan Udara Sejuk Ke Ruangan. 
                        Zat Ini Akan Berubah Bentuknya Dari Cair Ke Gas Dan Akan Keluar Ke Ruangan. 
                        Jadi, Ruangan Yang Kamu Gunakan Saat Ini Terasa Sejuk Karena Adanya Freon.
                    </P>
                    <p>
                        Ketika Pemasangan AC, Proses Pengisian Freon Harus Benar-Benar Diperhatikan. 
                        Pengisian Zat Ini Harus Berada Dalam Pengawasan Serta Benar-Benar Sesuai Dengan Prosedur Pengisian Yang Berlaku. 
                        Tujuannya Agar Tidak Sampai Mencampuri Udara.
                    </p>
                    <p>
                        Pengisian Freon Memang Harus Dilakukan Dengan Sangat Hati-Hati. 
                        Jangan Sampai Mengisinya Sembarangan Karena Kerugiannya Bis Sangat Fatal. 
                        Itu Artinya, Pemasangan Freon Harus Benar-Benar Dilakukan Oleh Ahlinya. 
                        Dengan Begitu, Proses Pemasangan Freon Akan Sesuai Dengan Prosedur Yang Berlaku.
                    </p>
                    <p>
                        Percayakan Pada Ahlinya, Hubungi <a href="#">Akhmad Service AC</a> Untuk Layanan Jasa Isi / Tambah Freon AC.  
                        Kami Jasa Isi / Tambah Freon AC Yang Memiliki Tenaga Ahli Yang Bekerja Dengan Secara Profesional Serta Cekatan Dan Berpengalaman.
                    </p>
                    <p>
                        Kami Spesialis Jasa Isi / Tambah Freon AC Banjarmasin. 
                        Menerima Layanan Jasa Isi / Tambah Freon AC Untuk Rumah, Apartemen, Kantor Ataupun Pabrik Anda. 
                        Kami Bergaransi Dan Tanggung Jawab Penuh Atas Pekerjaan.
                    </p>
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
