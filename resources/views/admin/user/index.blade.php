@extends('layouts/app')

@section('header')
    <div class="section-header">
        <h1>Daftar Petugas</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-3">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-success">
                            <i class="fas fa-plus"></i> Tambah Petugas
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="admin-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('components.utilities.datatables')

@push('script')
    <script>
        $('#admin-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('admin.user.datatables') }}'
            },
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'name',
                    name: 'Name'
                },
                {
                    data: 'email',
                    name: 'Email'
                },
                {
                    data: 'role',
                    name: 'Role'
                },
                {
                    data: 'action',
                    name: 'aksi'
                }
            ]
        });
    </script>
@endpush
