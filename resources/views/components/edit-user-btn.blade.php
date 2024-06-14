@props(['user'])

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-user-modal-{{ $user->id }}">
    Edit User
</button>

<div class="modal fade" id="edit-user-modal-{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                    @method('PUT')
                    @csrf

                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="$user->name" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="$user->email" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="usertype" :value="__('UserType')" />
                        <select id="usertype" name="usertype" class="form-control">
                            <option value="admin" @if($user->usertype == 'admin') selected @endif>Admin</option>
                            <option value="user" @if($user->usertype == 'user') selected @endif>User</option>
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <span class="ml-2"></span>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
