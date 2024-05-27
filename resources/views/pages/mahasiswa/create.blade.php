@extends('layouts.app')

@section('title', 'New Schedule')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Input Data Mahasiswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Mahasiswa</a></div>
                    <div class="breadcrumb-item">New Data</div>
                </div>
            </div>

            <div class="section-body">
            <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="card">
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text"
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
                                <input type="text"
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
                                <input type="text"
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
        <input type="radio" class="form-check-input" id="pemrograman_internet" name="mata_kuliah" value="Pemrograman Internet dan E-commerce">
        <label class="form-check-label" for="pemrograman_internet">Pemrograman Internet dan E-commerce</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="pemrograman_berorientasi_objek" name="mata_kuliah" value="Pemrograman Berorientasi Objek">
        <label class="form-check-label" for="pemrograman_berorientasi_objek">Pemrograman Berorientasi Objek</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="sistem_operasi" name="mata_kuliah" value="Sistem Operasi">
        <label class="form-check-label" for="sistem_operasi">Sistem Operasi</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="grafika_komputasi" name="mata_kuliah" value="Grafika Komputasi">
        <label class="form-check-label" for="grafika_komputasi">Grafika Komputasi</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="metode_numerik" name="mata_kuliah" value="Metode Numerik">
        <label class="form-check-label" for="metode_numerik">Metode Numerik</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="teori_bahasa_automata" name="mata_kuliah" value="Teori Bahasa Automata">
        <label class="form-check-label" for="teori_bahasa_automata">Teori Bahasa Automata</label>
    </div>

    <div class="form-check">
        <input type="radio" class="form-check-input" id="bahasa_inggris" name="mata_kuliah" value="Bahasa Inggris">
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
        <select class="form-control @error('ruangan') is-invalid @enderror" name="jam">
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
                                <input type="text"
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