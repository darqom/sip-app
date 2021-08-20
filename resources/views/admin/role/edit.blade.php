@extends('layouts.app')

@section('header')
    <div class="section-header">
        <h1>Edit Data Role</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.role.update', $role->id) }}" method="post">
                        @method('PATCH')
                        @include('admin.role.utilities.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
