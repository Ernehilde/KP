@props(['data'])

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-user-modal-{{ $data->id }}">
    Edit User
</button>

<div class="modal fade" id="edit-user-modal-{{ $data->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.data.update', $data->id) }}">
                    @method('PUT')
                    @csrf

                </form>
            </div>
        </div>
    </div>
</div>
