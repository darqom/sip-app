@csrf
<div class="form-group">
    <label for="name">Nama Lengkap</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name') ?? ($user->name ?? '') }}" autofocus>
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
        value="{{ old('email') ?? ($user->email ?? '') }}">
    @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="role">Role</label>
    <select name="role" id="role" class="form-control">
        @foreach (Spatie\Permission\Models\Role::all() as $role)
            @isset($user)
                <option value="{{ $role->name }}"
                    {{ old('role') ?? ($user->roles->first()->name ?? '') == $role->name ? 'selected' : '' }}>
                    {{ ucfirst($role->name) }}
                </option>
            @else
                <option value="{{ $role->name }}" {{ old('role') == $role->name ? 'selected' : '' }}>
                    {{ ucfirst($role->name) }}
                </option>
            @endisset
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="password">Kata Sandi</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="password_confirm">Konfimasi Kata Sandi</label>
    <input type="password" class="form-control @error('password_confirm') is-invalid @enderror" id="password_confirm"
        name="password_confirm">
    @error('password_confirm')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group d-flex justify-content-between">
    <a href="{{ route('admin.user.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
</div>
