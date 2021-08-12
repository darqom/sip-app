<div class="input-group mb-3">
    <input name="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('fullname') }}" autofocus>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div>
    @error('fullname')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="nisn" type="number" class="form-control @error('nisn') is-invalid @enderror" placeholder="Nomor Induk Siswa Nasional" value="{{ old('nisn') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-sort-numeric-up"></span>
        </div>
    </div>
    @error('nisn')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="niss" type="text" class="form-control @error('niss') is-invalid @enderror" placeholder="Nomor Induk Siswa Sekolah" value="{{ old('niss') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-sort-numeric-down"></span>
        </div>
    </div>
    @error('niss')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <select name="vocation" id="vocation" class="form-control @error('vocation') is-invalid @enderror">
        <option value="">Jurusan</option>
        @foreach ($vocations as $vocation)
            <option value="{{ $vocation->id }}" @if(old('vocation') == $vocation->id) selected @endif>
                {{ $vocation->name }}
            </option>
        @endforeach
    </select>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-th-list"></span>
        </div>
    </div>
    @error('vocation')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="class" type="text" class="form-control @error('class') is-invalid @enderror" placeholder="Kelas" value="{{ old('class') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-users"></span>
        </div>
    </div>
    @error('class')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="birth_place" type="text" class="form-control @error('birth_place') is-invalid @enderror" placeholder="Tempat Lahir" value="{{ old('birth_place') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-map-marker-alt"></span>
        </div>
    </div>
    @error('birth_place')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <input name="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-calendar-week"></span>
        </div>
    </div>
    @error('birth_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3 d-flex justify-content-end">
    <button type="button" class="btn btn-sm btn-info" data-toggle="collapse" data-target="#step2">Selanjutnya <i class="fas fa-arrow-right"></i></button>
</div>
