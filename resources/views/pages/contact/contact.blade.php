@extends('layouts.app')

@section('title', 'Services')

@push('style')
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
<style>
    .contact-section {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 20px;
    }

    .contact-card {
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 10px;
      width: calc(33% - 40px); /* Adjust width accordingly */
    text-align: center;
    }

    .contact-card h2 {
    font-size: 1.5em;
    margin-bottom: 15px;
    }

    .contact-card p {
    font-size: 1em;
    line-height: 1.5;
    }

    .contact-card img {
    width: 100%;
    margin-bottom: 15px;
    }
</style>
@endpush

@section('main')
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1>Kontak Kami</h1>
    </div>

    <div class="contact-section">
        <div class="contact-card">
        <img src="{{ asset('img/telepone.jpg') }}" alt="Phone Icon">
        <h2>Telepon</h2>
        <p>Anda Butuh Layanan Kami Dengan Cepat?? Hubungi Kami Segera</p>
        <p>0819-0503-3770</p>
        </div>

        <div class="contact-card">
        <img src="{{ asset('img/wa2.png') }}" alt="WhatsApp Icon">
        <h2>WhatsApp</h2>
        <p>Punya Permasalahan Tentang Service AC?? Tanyakan Pada Kami Ahlinya</p>
        <a href="https://wa.me/6281905033770">Contact Support</a>
        </div>

        <div class="contact-card">
            <img src="{{ asset('img/ig3.png') }}" alt="WhatsApp Icon">
            <h2>Instagram</h2>
            <p>Kami juga Punya Instagram</p>
            <a href="https://www.instagram.com/m.alpianrizky">Instagram</a>
            </div>
            
    </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

<script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush