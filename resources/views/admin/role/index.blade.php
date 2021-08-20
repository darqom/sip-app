@extends('layouts.app')

@section('header')
    <div class="section-header">
        <h1>Daftar Role</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end pb-3">
                        <a href="{{ route('admin.role.create') }}" class="btn btn-success">
                            <i class="fas fa-plus"></i> Tambah Role
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="role-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Role</th>
                                    <th>Permission</th>
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
        $('#role-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('admin.role.datatables') }}'
            },
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'permission',
                    name: 'permission',
                    orderable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });
    </script>
@endpush
