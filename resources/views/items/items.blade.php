<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('List Barang') }}
                </h2>
            </div>
            <div class="col-auto">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" id="btn-plus">
                        <a href="create"><i class="bx bx-plus"></i>
                            <span class="tooltip-text">Tambah Barang</span></a>
                    </button>
                    <a href="print-items">
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
                    <th scope="col" class="text-center align-middle">Picker</th>
                    <th scope="col" class="text-center align-middle">Wilayah</th>
                    <th scope="col" class="text-center align-middle">Kode Toko</th>
                    <th scope="col" class="text-center align-middle">Nama Toko</th>
                    <th scope="col" class="text-center align-middle">Total Picker</th>
                    <th scope="col" class="text-center align-middle">List Barang</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataInputs as $dataInput)
            <tr>
                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                <td class="text-center align-middle">{{ $dataInput->picker }}</td>
                <td class="text-center align-middle">{{ $dataInput->wilayah }}</td>
                <td class="text-center align-middle">{{ $dataInput->kode_toko }}</td>
                <td class="text-center align-middle">{{ $dataInput->nama_toko }}</td>
                <td class="text-center align-middle">{{ $dataInput->total_picker }}</td>
                <td class="text-center align-middle">
                    <x-show-item :dataItem="$dataInput" />
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
    </div>
</x-app-layout>
