<?php

namespace App\Http\Controllers;

use App\Models\DataItems;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index() : View
    {
        $dataInputs = DataItems::oldest()->get();
        return view('items.items', compact('dataInputs'));
    }

    public function create(): View
    {
        return view('items.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'picker' => 'required|string',
            'wilayah' => 'required|string',
            'total_picker' => 'required|integer',
            'kode_toko' => 'required|string',
            'nama_toko' => 'required|string',
            'bl14_17' => 'required|integer',
            'bl12_13' => 'required|integer',
            'bd' => 'required|integer',
            'krb' => 'required|integer',
            'aki' => 'required|integer',
            'oli' => 'required|integer',
            'botol' => 'required|integer',
            'kardus' => 'required|integer',
        ]);

        DataItems::create([
            'picker' => $request->picker,
            'wilayah' => $request->wilayah,
            'total_picker' => $request->total_picker,
            'kode_toko' => $request->kode_toko,
            'nama_toko' => $request->nama_toko,
            'bl14_17' => $request->bl14_17,
            'bl12_13' => $request->bl12_13,
            'bd' => $request->bd,
            'krb' => $request->krb,
            'aki' => $request->aki,
            'oli' => $request->oli,
            'botol' => $request->botol,
            'kardus' => $request->kardus,
        ]);

        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dimasukkan']);
    }
}
