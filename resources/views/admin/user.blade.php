<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <h1 class="ml-2 mb-2 text-2xl lg:text-xl text-gray-500 dark:text-gray-400 font-bold">User List</h1>
            </div>
            <div class="col-auto">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" id="btn-plus">
                        <a href="regis"><i class="bx bx-plus"></i>
                            <span class="tooltip-text">Tambah User</span></a>
                    </button>
                    <button type="button" class="btn btn-success">
                        <i class="bx bx-download"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <table id="table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
                @forelse ($lists as $list)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $list->name }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $list->email }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $list->usertype }}</td>
                    <td class="flex items-center px-6 py-4">
                        <x-edit-user-btn :user='$list' />
                        <span class="ml-2"></span>
                        <x-delete-user-btn :user='$list'/>
                    </td>
                </tr>
            @empty
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
              </div>
            @endforelse
        </tbody>
    </tfoot>
    </table>
</x-app-layout>
