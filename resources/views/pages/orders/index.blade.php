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

                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Schedules</a></div>
                    <div class="breadcrumb-item">All Schedule</div>
                </div> --}}
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
                                {{-- <div class="float-right mb-3">
                                    <form method="GET" action="{{ route('order.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search by Name" name="name">
                                            <input type="number" class="form-control" placeholder="Year" name="year" min="1900" max="2100">
                                            <select class="form-control" name="month">
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <select class="form-control" name="day">
                                                <option value="">Day</option>
                                                @for ($i = 1; $i <= 31; $i++)
                                                    <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
     --}}

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
                                            @role('admin')
                                            <th>Aksi</th>
                                            @endrole
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
                                                    <button type="button" class="btn btn-sm btn-warning btn-icon" disabled>Pending</button>
                                                    @elseif ($order->status == 'assign')
                                                    <button type="button" class="btn btn-sm btn-info btn-icon" disabled>Progress</button>
                                                    @elseif ($order->status == 'selesai')
                                                    <button type="button" class="btn btn-sm btn-success btn-icon" disabled>Selesai</button>
                                                    @endif
                                                    @endguest
                                                    @role('admin')
                                                    @if ($order->status == 'pending')
                                                    <button type="button" class="btn btn-sm btn-warning btn-icon" disabled>Pending</button>
                                                    @elseif ($order->status == 'assign')
                                                    <button type="button" class="btn btn-sm btn-info btn-icon" disabled>Progress</button>
                                                    @elseif ($order->status == 'selesai')
                                                    <button type="button" class="btn btn-sm btn-success btn-icon" disabled>Selesai</button>
                                                    @endif
                                                    @endrole
                                                    @role('user')
                                                    @if ($order->status == 'assign')
                                                    <button type="button" class="btn btn-sm btn-warning btn-icon" disabled>Progress</button>
                                                    @elseif ($order->status == 'selesai')
                                                    <button type="button" class="btn btn-sm btn-success btn-icon" disabled>Selesai</button>
                                                    @else
                                                    <form action="{{ route('order.ambil', $order->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-hand-paper"></i> Ambil Pesanan
                                                        </button>
                                                    </form>
                                                    @endif
                                                    @endrole
                                                </td>
                                                <td>
                                                    @role('admin|superadmin')
                                                    <div class="d-flex justify-content">
                                                            <a href='{{ route('order.edit', $order->id) }}'
                                                                class="btn btn-sm btn-info btn-icon">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                            </a>
                                                            <form action="{{ route('order.destroy', $order->id) }}" method="POST"
                                                                class="ml-2">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                    <i class="fas fa-times"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                        @endrole
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
    <!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Pesanan Ini Mau Dihapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal buat ambil pesanan --}}

<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Pesanan Ini Mau Dihapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>

    <script>
        // Attach event listener to all delete buttons to store the form ID in the modal
        $('#deleteConfirmationModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var formId = button.data('form-id'); // Extract info from data-* attributes
            var modal = $(this);
            modal.data('form-id', formId); // Store the form ID in the modal
        });
    
        // Attach event listener to the modal confirmation button
        document.getElementById('confirmDeleteButton').addEventListener('click', function() {
            // Get the form ID from the data attribute of the modal
            var formId = $('#deleteConfirmationModal').data('form-id');
            // Submit the form
            document.getElementById(formId).submit();
        });
    </script>
@endpush
