@extends('layouts.app')

@section('title', 'Users')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Users</h1>

                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">All Users</div>
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
                                <h4>All Users</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('user.create') }}" class="btn btn-primary">New User</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET", action="{{ route('user.index') }}">
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

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>HandPhone</th>
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->handphone }}
                                                </td>
                                                <td>
                                                    @if ($user->hasRole('admin'))
                                                    Admin
                                                @elseif ($user->hasRole('user'))
                                                    User
                                                @elseif ($user->hasRole('superadmin'))
                                                    Super Admin
                                                    @else
                                                @endif
                                                </td>
                                                <td>
                                                    @if(auth()->user()->hasRole('superadmin'))
                                                        @if($user->id !== auth()->user()->id) <!-- Menyembunyikan tombol delete jika superadmin mencoba menghapus dirinya sendiri -->
                                                            <div class="d-flex justify-content-center">
                                                                {{-- <a href='{{ route('user.edit', $user->id) }}' class="btn btn-sm btn-info btn-icon">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a> --}}
                                                                @if ($user->hasRole('admin') || $user->hasRole('user'))
                                                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="ml-2">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                            <i class="fas fa-times"></i> Delete
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        @endif
                                                        @endif
                                                    {{-- @elseif(auth()->user()->hasRole('admin')) --}}
                                                        @if($user->hasRole('user')) <!-- Hanya admin bisa mengedit bagian user -->
                                                            <div class="d-flex justify-content-center">
                                                                {{-- <a href='{{ route('user.edit', $user->id) }}' class="btn btn-sm btn-info btn-icon">
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </a>
                                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="ml-2"> --}}
                                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-sm btn-danger btn-icon" data-toggle="modal" data-target="#deleteConfirmationModal" data-form-id="delete-form-{{ $user->id }}">
                                                            <i class="fas fa-times"></i> Delete
                                                        </button>
                                                        <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-none">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="float-right">
                                    {{ $users->withQueryString()->links() }}
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
                Apakah User Ini Mau Dihapus?
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
