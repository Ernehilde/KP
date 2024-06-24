<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <h1 class="ml-2 mb-2 text-2xl lg:text-xl text-gray-500 dark:text-gray-400 font-bold">Harga Barang</h1>
            </div>
            <div class="col-auto">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('admin.harga.create') }}">
                        <button type="button" class="btn btn-primary" id="btn-plus">
                            <i class="bx bx-plus"></i>
                            <span class="tooltip-text">Tambah Harga Barang</span>
                        </button>
                    </a>
                    <a href="{{ route('admin.items.printForm') }}">
                        <button type="button" class="btn btn-success">
                            <i class="bx bx-download"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col" class="text-center align-middle">No.</th>
                    <th scope="col" class="text-center align-middle">Nama Barang</th>
                    <th scope="col" class="text-center align-middle">Harga</th>
                    <th scope="col" class="text-center align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($harga as $price)
                    <tr>
                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                        <td class="text-center align-middle">{{ $price->item_name }}</td>
                        <td class="text-center align-middle">Rp. {{ $price->harga }}</td>
                        <td class="flex items-center px-6 py-4">
                            <x-delete-harga :harga='$harga'/>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
