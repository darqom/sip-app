<div class="d-flex">
    @can('edit-user')
        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-success mr-1" title="edit">
            <i class="fas fa-pencil-alt"></i>
        </a>
    @endcan
    @can('delete-user')
        <form method="post" action="{{ route('admin.user.destroy', $user->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" title="hapus">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    @endcan
</div>
