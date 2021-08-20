@extends('layouts.app')

@section('header')
    <div class="section-header">
        <h1>Tambah Role</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.role.store') }}" method="post">
                        @include('admin.role.utilities.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
