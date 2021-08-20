@csrf
<div class="form-group">
    <label for="role">Nama Role</label>
    <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role"
        value="{{ old('role') ?? ($role->name ?? '') }}" autofocus>
    @error('role')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label>Permission</label>
    <div class="row">
        @foreach (Spatie\Permission\Models\Permission::all() as $perm)
            <div class="col-md-3 col-sm-6 mt-2">
                @isset($role)
                    <input type="checkbox" name="permissions[]" id="{{ $perm->name }}" value="{{ $perm->name }}" @if ($role->hasPermissionTo($perm->name) ?? false) checked @endif>
                    <label for="{{ $perm->name }}">{{ $perm->name }}</label>
                @else
                    <input type="checkbox" name="permissions[]" id="{{ $perm->name }}" value="{{ $perm->name }}">
                    <label for="{{ $perm->name }}">{{ $perm->name }}</label>
                @endisset
            </div>
        @endforeach
    </div>
    @error('permissions')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group d-flex justify-content-between">
    <a href="{{ route('admin.role.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
        Simpan</button>
</div>
