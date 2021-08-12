@extends('layouts.student.auth')

@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>SIP</b>Darqom</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Daftar Akun Baru</p>
            
            <form action="../../index.html" method="post" class="mb-2">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nomor Induk">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-sort-numeric-up"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select name="vocation" id="vocation" class="form-control">
                        <option value="">Jurusan</option>
                        @foreach ($vocations as $vocation)
                            <option value="{{ $vocation->id }}">
                                {{ $vocation->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-th-list"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Kelas">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-users"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="date" class="form-control">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-calendar-week"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Tempat Lahir">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-map-marker-alt"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Nomor HP">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-phone-square"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                Saya setuju <a href="#">ketentuan</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                </div>
            </form>
            
            <a href="{{ route('login.student') }}" class="text-center">Saya sudah terdaftar</a>
        </div>
    </div>
</div>
@endsection
