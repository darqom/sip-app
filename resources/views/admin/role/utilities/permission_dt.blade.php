<div class="row">
    @foreach ($perms as $perm)
        <div class="col-md-3 col-sm-6">
            <div class="form-group">
                <input type="checkbox" id="{{ $perm->name . $role->name }}" @if ($role->hasPermissionTo($perm->name)) checked @endif>
                <label for="{{ $perm->name . $role->name }}">{{ $perm->name }}</label>
            </div>
        </div>
    @endforeach
</div>
