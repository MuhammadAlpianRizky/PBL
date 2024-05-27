@extends('layouts.app')

@section('title', 'New Schedule')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Mahasiswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Mahasiswa</a></div>
                    <div class="breadcrumb-item">New Data</div>
                </div>

            </div>

            <div class="section-body">

                <div class="card">
                    @if(session('error'))
                    <div class="row">
                        <div class="col-12">
                            @include('layouts.alert')
                        </div>
                    </div>                  
                    @endif  
                    <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>New Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" value="{{$mahasiswa->nama}}"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    name="nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NPM</label>
                                <input type="text" value="{{ $mahasiswa->npm }}"
                                    class="form-control @error('npm')
                                    is-invalid
                                @enderror"
                                    name="npm">
                                @error('npm')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" value="{{$mahasiswa->no_hp}}"
                                    class="form-control @error('no_hp')
                                    is-invalid
                                @enderror"
                                    name="no_hp">
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
    <label>Mata Kuliah</label>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="pemrograman_internet" name="mata_kuliah" value="Pemrograman Internet dan E-commerce" {{ $mahasiswa->mata_kuliah == "Pemrograman Internet dan E-commerce" ? 'checked' : '' }}>
        <label class="form-check-label" for="pemrograman_internet">Pemrograman Internet dan E-commerce</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="pemrograman_berorientasi_objek" name="mata_kuliah" value="Pemrograman Berorientasi Objek" {{ $mahasiswa->mata_kuliah == "Pemrograman Berorientasi Objek" ? 'checked' : '' }}>
        <label class="form-check-label" for="pemrograman_berorientasi_objek">Pemrograman Berorientasi Objek</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="sistem_operasi" name="mata_kuliah" value="Sistem Operasi" {{ $mahasiswa->mata_kuliah == "Sistem Operasi" ? 'checked' : '' }}>
        <label class="form-check-label" for="sistem_operasi">Sistem Operasi</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="grafika_komputasi" name="mata_kuliah" value="Grafika Komputasi" {{ $mahasiswa->mata_kuliah == "Grafika Komputasi" ? 'checked' : '' }}>
        <label class="form-check-label" for="grafika_komputasi">Grafika Komputasi</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="metode_numerik" name="mata_kuliah" value="Metode Numerik" {{ $mahasiswa->mata_kuliah == "Metode Numerik" ? 'checked' : '' }}>
        <label class="form-check-label" for="metode_numerik">Metode Numerik</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="teori_bahasa_automata" name="mata_kuliah" value="Teori Bahasa Automata" {{ $mahasiswa->mata_kuliah == "Teori Bahasa Automata" ? 'checked' : '' }}>
        <label class="form-check-label" for="teori_bahasa_automata">Teori Bahasa Automata</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="bahasa_inggris" name="mata_kuliah" value="Bahasa Inggris" {{ $mahasiswa->mata_kuliah == "Bahasa Inggris" ? 'checked' : '' }}>
        <label class="form-check-label" for="bahasa_inggris">Bahasa Inggris</label>
    </div>

    @error('mata_kuliah')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label>Jam</label>
    <select class="form-control @error('jam') is-invalid @enderror" name="jam">
        <option value="{{$mahasiswa->jam}}"> {{$mahasiswa->jam}}</option>
        <option value="08:00">08:00</option>
        <option value="09:00">09:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="12:00">12:00</option>
    </select>

    @error('jam')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

                            <div class="form-group">
                                <label>Saran/Komentar</label>
                                <input type="text" value="{{$mahasiswa->saran_komentar}}"
                                    class="form-control @error('saran_komentar')
                                    is-invalid
                                @enderror"
                                    name="saran_komentar">
                                @error('saran_komentar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            
                        <div class="card-footer text-right">
                            <a class="btn btn-danger" href="{{ route('mahasiswa.index') }}">Batal</a>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                        
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush