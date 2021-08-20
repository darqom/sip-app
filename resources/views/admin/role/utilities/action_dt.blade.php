<div class="d-flex">
    <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-sm btn-success mr-1" title="edit">
        <i class="fas fa-pencil-alt"></i>
    </a>
    <form action="{{ route('admin.role.destroy', $role->id) }}" method="post" title="hapus">
        @csrf
        <button type="submit" class="btn btn-sm btn-danger">
            <i class="fas fa-trash-alt"></i>
        </button>
    </form>
</div>
