<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\harga;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HargaController extends Controller
{
    public function index(): View
    {
        $harga = Harga::oldest()->get();
        return view('admin.harga.index', compact('harga'));
    }

    public function create(): View
    {
        return view('admin.harga.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'item_name' => 'required|string|unique:harga,item_name',
            'harga' => 'required|numeric|min:0',
        ]);

        harga::create($request->only('item_name', 'harga'));

        return redirect()->route('admin.harga.index')->with('success', 'harga created successfully.');
    }

    public function edit(harga $harga): View
    {
        return view('admin.harga.edit', compact('harga'));
    }

    public function update(Request $request, harga $harga): RedirectResponse
    {
        $request->validate([
            'item_name' => 'required|string|unique:harga,item_name,' . $harga->id,
            'harga' => 'required|numeric|min:0',
        ]);

        $harga->update($request->only('item_name', 'harga'));

        return redirect()->route('admin.harga.index')->with('success', 'harga updated successfully.');
    }

    public function destroy(harga $harga): RedirectResponse
    {
        $harga->delete();

        return redirect()->route('admin.harga.index')->with('success', 'harga deleted successfully.');
    }
}
