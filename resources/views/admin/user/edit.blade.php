@extends('layouts.app')

@section('header')
    <div class="section-header">
        <h1>Edit Data Petugas</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-exclamation-circle"></i> Kosongkan kata sandi jika tidak diubah
                    </div>
                    <form action="{{ route('admin.user.update', $user->id) }}" method="post">
                        @method('PATCH')
                        @include('admin.user.utilities.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
