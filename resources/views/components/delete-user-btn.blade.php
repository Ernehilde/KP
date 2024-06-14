@props(['user'])

<div>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-user-modal-{{ $user->id }}">
        Delete
    </button>

    <div class="modal fade" id="delete-user-modal-{{ $user->id }}" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete {{ $user->name }} ?</p>
                </div>
                <div class="modal-footer">
                    <form id="deleteForm-{{ $user->id }}" action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
