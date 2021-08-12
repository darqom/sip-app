<div class="input-group mb-3 d-flex justify-content-center align-items-center">
    <label for="register-image" id="register-image-label" class="@error('image') is-invalid @enderror">
        <input type="file" class="d-none" name="image" id="register-image" accept="image/*">
        <p>Foto 3 x 4</p>
    </label>
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-envelope"></span>
        </div>
    </div>
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="phone" type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Nomor HP" value="{{ old('phone') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-phone-square"></span>
        </div>
    </div>
    @error('phone')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Kata Sandi">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
    @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
    @error('password_confirmation')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3 d-flex justify-content-start">
    <button type="button" class="btn btn-sm btn-info" data-toggle="collapse" data-target="#step1"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
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
        <button type="submit" class="btn btn-primary btn-block" id="register-submit-button" disabled>Daftar</button>
    </div>
</div>
