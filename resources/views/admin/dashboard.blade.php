@extends('layouts.app')

@section('header')
<div class="section-header">
    <h1>Dashboard</h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-user-tie"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Petugas</h4>
                </div>
                <div class="card-body">
                    {{ $adminTotal }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Siswa</h4>
                </div>
                <div class="card-body">
                    {{ $studentTotal }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Siswa Aktif</h4>
                </div>
                <div class="card-body">
                    {{ $studentActive }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="far fa-circle"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Siswa Pending</h4>
                </div>
                <div class="card-body">
                    {{ $studentPending }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
