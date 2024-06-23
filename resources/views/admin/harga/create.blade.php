<x-app-layout>
<div class="container">
    <h1>Add New harga</h1>
    <form action="{{ route('admin.harga.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="item_name">Item Name</label>
            <input type="text" name="item_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add harga</button>
    </form>
</div>
</x-app-layout>
