@extends('layouts.student.auth')

@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>SIP</b>Darqom</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Login Siswa</p>
            
            <form action="{{ route('login.student') }}" method="post" class="mb-1">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Kata Sandi">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
            </form>
            <p class="mb-1">
                <a href="forgot-password.html">Lupa kata sandi</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('register.student') }}" class="text-center">Daftar akun baru</a>
            </p>
        </div>
    </div>
</div>
@endsection
