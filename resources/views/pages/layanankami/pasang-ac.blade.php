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
                <h1>Pasang AC</h1>
            </div>
            <div class="services-section">
                <div class="service-card-service-ac">
                    <img src="img/bongkar.png" alt="Service Icon" class="mobile-image">
                    <h2>Bongkar Pasang AC</h2>
                    <div>
                    <p><a href="#"> Service AC Banjarmasin</a> – Kami Jasa Service AC Terbaik Profesional Berpengalaman Di Banjarmasin Dan Sekitarnya. 
                    </div>
                    <div>
                        <p>AC (Air Conditioner) Atau Pendingin Udara Sangat Diperlukan Untuk Menyejukkan Ruangan, 
                            Terutama Pada Saat Cuaca Panas Di Negara Tropis Seperti Indonesia. 
                            Namun Untuk Memasangnya Tak Bisa Gegabah Dan Sembarangan. 
                            Serahkan Saja Pada Ahlinya, Hubungi <a href="#">Akhmad Service AC</a> Untuk Jasa Bongkar Pasang AC Yang Tepat, 
                            Oleh Tenaga Ahli Yang Bekerja Dengan Secara Profesional Serta Cekatan Dan Berpengalaman.</p>
                    </div>
                    <div>
                        <p>
                            Pasang AC Bisa Dilakukan Baik Untuk AC Baru Beli Maupun AC Bekas Atau AC Copotan Atau AC Pindahan Dari Suatu Ruangan Ke Ruangan Yang Lain. 
                            AC Yang Telah Dipasang Pada Suatu Ruangan Memang Bisa Dibongkar Lalu Dipasang Di Tempat Yang Lain. 
                            Namun Pengerjaannya Harus Dengan Penuh Kehati - Hatian Agar Barang Elektronik Tersebut Tidak Rusak Maupun Menimbulkan Bahaya. 
                            Mengingat Komponen AC Yang Beragam Yang Cukup Rumit Penanganannya Dan Akan Timbul Kesulitan Jika Tidak Dilakukan Oleh Ahlinya Yang Berpengalaman.
                        </p>
                    </div>
                    <div>
                        <p>
                            Kami Spesialis Bongkar Pasang AC Jogja. Menerima Jasa Bongkar Pasang AC Sekala Kecil Dan Besar. 
                            Kami Bergaransi Dan Tanggung Jawab Penuh Atas Pekerjaan. 
                            <h3>Beberapa Produk Dan Layanan Kami Adalah :</h3>
                        </p>
                    </div>
                        
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            Pasang AC Split</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            Pasang AC Cassette</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            Pasang AC Standing Floor</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            Pasang AC Multi-S</p>
                        <p><img src="{{ asset('img/lengkap.jpg') }}" alt="Service Icon">
                            Dan Lain – Lain</p>
                        <div>
                            <h3>Hal-Hal Penentu Harga Biaya Pasang AC</h3>
                            <p>
                                Biaya Tarif Pasang AC Dipengaruhi Oleh Beberapa Faktor Berikut Ini.
                            </p>
                            <ol class="cuci-ac-ol">
                                <li>
                                    <h3>
                                        Jenis Merk Dan Jenis AC
                                    </h3>
                                    <p>
                                        Merk AC Tertentu Bisa Berbeda Harga Tarif Jasa Pasang AC Nya. Hal Ini Tergantung Kebijakan Masing-Masing Merk Perusahaan Yang Bersangkutan. 
                                        Pada AC Yang Baru Beli Maka Biasanya Harga Biaya Pasang Tersebut Sudah Dihitung Termasuk Dengan Harga Beli AC Barunya. 
                                        Sedangkan Untuk Pasang AC Bekasnya Maka Bisa Pergunakan Jasa Pasang AC Secara Umum Yang Melayani Jasa Pasang AC Untuk Segala Merk, 
                                        Dan Tidak Harus Secara Khusus Dari Jasa Pasang AC Merk Tertentu. 
                                        Sedangkan Mengenai Jenis AC Nya Maka Biasanya AC Split Atau Wall AC Atau AC Dinding 
                                        Yang Perlu Dipasang Di Tembok Dinding Suatu Ruangan Dalam Pengoperasiannya Sehari-Hari.
                                    </p>
                                </li>
                                <li>
                                    <h3>
                                        Besaran PK AC
                                    </h3>
                                    <p>
                                        Lalu Hal Lain Yang Menentukan Besaran Harga Jasa Pasang AC Adalah Besaran PK AC Nya. 
                                        Besaran PK AC Bisa Berbeda-Beda. Ada AC Dengan PK Mulai Dari ½ PK, Lalu 1 PK, Kemudian 1,5 PK, Juga 2 PK Dan Seterusnya. 
                                        Untuk Suatu Ruangan Yang Lebih Luas Akan Memerlukan AC Dengan PK Yang Lebih Besar 
                                        Juga Agar Bisa Menjadi Sejuk Secara Maksimal Dengan Lebih Cepat Udaranya. 
                                        Semakin Besar PK AC Nya Maka Akan Semakin Tinggi Tarif Harga Jasa Pasangnya.
                                    </p>
                                </li>
                                <li>
                                    <h3>
                                        Panjang Pipa
                                    </h3>
                                    <p>
                                        Panjangnya Pipa AC Juga Turut Menentukan Besaran Harga Total Biaya Pasang AC. 
                                        Jika Panjang Pipa Itu Standar, Biasanya Di Kisaran 3 Meter Atau 5 Meter Maka Tak Ada Pengenaan Biaya Tambahan. 
                                        Tapi Jika Lebih, Maka Akan Ada Biaya Tambahan.
                                    </p>
                                </li>
                                <li>   
                                <h3>
                                        Perlu Bobol Tembok Atau Tidaknya
                                    </h3>
                                    <p>
                                        Pasang AC Pada Suatu Ruangan Ada Yang Perlu Dilakukan Dengan Membobol Tembok Dan Ada Yang Tidak. 
                                        Jika Perlu Dilakukan Pembobolan Tembok Maka Akan Ada Tambahan Biaya Pasangnya Lagi. 
                                    </p>
                                </li>
                                <li>
                                    <h3>
                                        Lokasi Pasang AC
                                    </h3>
                                    <p>
                                        Lokasi Pemasangan AC Juga Menentukan Besaran Harga Biaya Pasang AC Nya. 
                                        Jika Cukup Jauh Lokasinya Maka Akan Ada Biaya Transportasi Tambahan Yang Dikenakan. 
                                        Juga Jika Pemasangan Dilakukan Di Apartemen Maka Akan Ada Tambahan Biaya Biasanya.
                                    </p>
                                </li>
                            </ol>
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
