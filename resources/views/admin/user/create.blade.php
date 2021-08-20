@extends('layouts.app')

@section('header')
    <div class="section-header">
        <h1>Tambah Petugas</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.user.store') }}" method="post">
                        @include('admin.user.utilities.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
