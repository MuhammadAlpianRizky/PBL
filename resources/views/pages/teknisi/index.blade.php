@extends('layouts.app')

@section('title', 'Technicians')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Technicians</h1>

                <!-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Technicians</a></div>
                    <div class="breadcrumb-item">All Technicians</div>
                </div> -->
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Pemesan</th>
                                                <th>Alamat</th>
                                                <th>No Hp</th>
                                                <th>Pesanan Selesai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($technicians as $technician)
                                                <tr>
                                                    <td>{{ $technician->order->id }}</td>
                                                    {{-- <td>{{ $technician->user->name }}</td> --}}
                                                    {{-- <td>{{ $technician->order->id }}</td> --}}
                                                    <td>{{ $technician->order->nama }}</td>
                                                    <td>{{ $technician->order->alamat }}</td>
                                                    <td>{{ $technician->order->no_hp }}</td>
                                                    <td>
                                                        @if ($technician->order->status == 'assign')
                                                            <form action="{{ route('order.selesai', $technician->order->id) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button type="submit" class="btn btn-sm btn-primary">
                                                                    Service Selesai
                                                                </button>
                                                            </form>
                                                        @else
                                                        <button type="button" class="btn btn-sm btn-success btn-icon"disabled>Selesai</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ $technicians->links() }} <!-- Menampilkan pagination links -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
