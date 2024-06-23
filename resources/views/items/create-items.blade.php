<x-app-layout>
    <div class="p-4 w-full max-w-md mx-auto">
        <!-- Content -->
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add New Item
                </h3>
            </div>
            <!-- Body -->
            <div class="p-4 md:p-5">
                <form method="POST" action="{{ route('items.store') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                        @error('tanggal')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="tanggal" value="{{ old('tanggal') }}" placeholder="Pilih Tanggal" type="date" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="picker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picker</label>
                        @error('picker')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="picker" value="{{ old('picker') }}" placeholder="Masukkan Picker" type="text" id="picker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="wilayah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wilayah</label>
                        @error('wilayah')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="wilayah" value="{{ old('wilayah') }}" placeholder="Masukkan Wilayah" type="text" id="wilayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="total_picker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Picker</label>
                        @error('total_picker')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="total_picker" type="number" value="{{ old('total_picker') }}" placeholder="Masukkan Total Picker" id="total_picker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="kode_toko" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Toko</label>
                        @error('kode_toko')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="kode_toko" value="{{ old('kode_toko') }}" placeholder="Masukkan Kode Toko" type="text" id="kode_toko" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="nama_toko" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Toko</label>
                        @error('nama_toko')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="nama_toko" value="{{ old('nama_toko') }}" placeholder="Masukkan Nama Toko" type="text" id="nama_toko" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="bl14_17" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ban Luar 14/17</label>
                        @error('bl14_17')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="bl14_17" type="number" value="{{ old('bl14_17') }}" placeholder="Masukkan BL 14-17" id="bl14_17" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="bl12_13" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ban Luar 12/13</label>
                        @error('bl12_13')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="bl12_13" type="number" value="{{ old('bl12_13') }}" placeholder="Masukkan BL 12-13" id="bl12_13" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="bd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ban Dalem</label>
                        @error('bd')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                        @enderror
                        <input name="bd" type="number" value="{{ old('bd') }}" placeholder="Masukkan BD" id="bd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="krb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Karbu</label>
                        @error('krb')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{ $message }}</span>
                            </div>
                        @enderror
                        <input name="krb" type="number" value="{{ old('krb') }}" placeholder="Masukkan KRB" id="krb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="aki" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aki</label>
                        @error('aki')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{ $message }}</span>
                            </div>
                        @enderror
                        <input name="aki" type="number" value="{{ old('aki') }}" placeholder="Masukkan AKI" id="aki" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="oli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Oli</label>
                        @error('oli')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{ $message }}</span>
                            </div>
                        @enderror
                        <input name="oli" type="number" value="{{ old('oli') }}" placeholder="Masukkan OLI" id="oli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="botol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Botol</label>
                        @error('botol')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{ $message }}</span>
                            </div>
                        @enderror
                        <input name="botol" type="number" value="{{ old('botol') }}" placeholder="Masukkan BOTOL" id="botol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="kardus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kardus</label>
                        @error('kardus')
                            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{ $message }}</span>
                            </div>
                        @enderror
                        <input name="kardus" type="number" value="{{ old('kardus') }}" placeholder="Masukkan KARDUS" id="kardus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
