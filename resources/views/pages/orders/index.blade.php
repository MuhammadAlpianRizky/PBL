@extends('layouts.app')

@section('title', 'Users')
<style>
    .colorpesanan{
        color:black;
        font-weight: 900;
    }
</style>

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pesanan</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Schedules</a></div>
                    <div class="breadcrumb-item">All Schedule</div>
                </div>
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
                            <div class="card-header">
                                <h4>Silahkan Pesan Service</h4>
                                @guest
                                    
                                
                                <div class="section-header-button">
                                    <a href="{{ route('order.create') }}" class="btn btn-primary">Pesanan Baru</a>
                                    <span class="colorpesanan">Tidak melayani pesanan h-1</span>
                                </div>
                                @endguest
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('order.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>No Pesanan</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Tanggal Pengerjaan</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->nama }}</td>
                                                <td>{{ $order->alamat }}</td>
                                                @role('admin|user')
                                                <td>{{ $order->no_hp }}</td>
                                                @endrole
                                                @guest
                                                <td>{{ substr($order->no_hp, 0, 3) . str_repeat('*', strlen($order->no_hp) - 6) . substr($order->no_hp, -3) }}</td>
                                                @endguest
                                                <td>{{ $order->tanggal }}</td>
                                                <td>
                                                @guest
                                                @if ($order->status == 'pending')
                                                <button type="button" class="btn btn-sm btn-warning btn-icon"disabled>Pending</button>
                                                @elseif ($order->status == 'assign')
                                                <button type="button" class="btn btn-sm btn-info btn-icon"disabled>Progress</button>
                                                @elseif ($order->status == 'selesai')
                                                <button type="button" class="btn btn-sm btn-success btn-icon"disabled>Selesai</button>
                                                @endif
                                                    
                                                @endguest
                                                    @role('user')
                                                        @if ($order->status == 'assign')
                                                            <button type="button" class="btn btn-sm btn-warning btn-icon"disabled>Progress</button>
                                                            @elseif ($order->status == 'selesai')
                                                            <button type="button" class="btn btn-sm btn-success btn-icon"disabled>Selesai</button>
                                                            @else
                                                        <form action="{{ route('order.ambil', $order->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-primary">
                                                                <i class="fas fa-hand-paper"></i> Ambil Pesanan
                                                            </button>
                                                        </form>
                                                        @endif
                                                    @else
                                                        @role('admin|superadmin')
                                                            <div class="d-flex justify-content-center">
                                                                <a href='{{ route('order.edit', $order->id) }}' class="btn btn-sm btn-info btn-icon">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a>
                                                
                                                                <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="ml-2">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                        <i class="fas fa-times"></i> Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        @endrole
                                                    @endrole
                                                </td>                                                
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $orders->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
