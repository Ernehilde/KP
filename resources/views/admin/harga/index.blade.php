<x-app-layout>
<div class="container">
    <h1>Harga</h1>
    <a href="{{ route('admin.harga.create') }}" class="btn btn-primary">Tambah Harga Barang</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($harga as $price)
                <tr>
                    <td>{{ $price->item_name }}</td>
                    <td>Rp. {{ $price->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
