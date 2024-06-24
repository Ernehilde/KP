<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataItems;
use App\Models\Harga;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View as View2;

class DataController extends Controller
{
    public function index(): View
    {
        $dataInputs = DataItems::oldest()->get();
        foreach ($dataInputs as $dataInput) {
            $hargabl14_17 = Harga::where('item_name', 'Ban Luar R14, 17')->first()->harga ?? 0;
            $hargabl12_13 = Harga::where('item_name', 'Ban Luar R12, 13')->first()->harga ?? 0;
            $hargabd = Harga::where('item_name', 'Ban Dalam')->first()->harga ?? 0;
            $hargakrb = Harga::where('item_name', 'Karbu')->first()->harga ?? 0;
            $hargaAki = Harga::where('item_name', 'Aki')->first()->harga ?? 0;
            $hargaoli = Harga::where('item_name', 'Oli Bekas')->first()->harga ?? 0;
            $hargabotol = Harga::where('item_name', 'Botol')->first()->harga ?? 0;
            $hargaKardus = Harga::where('item_name', 'Kardus')->first()->harga ?? 0;

            $dataInput->totalHargaAki = $dataInput->aki * $hargaAki;
            $dataInput->totalHargaKardus = $dataInput->kardus * $hargaKardus;
            $dataInput->totalHargabl14_17 = $dataInput->bl14_17 * $hargabl14_17;
            $dataInput->totalHargabl12_13 = $dataInput->bl12_13 * $hargabl12_13;
            $dataInput->totalHargaKrb = $dataInput->krb * $hargakrb;
            $dataInput->totalHargabd = $dataInput->bd * $hargabd;
            $dataInput->totalHargabotol = $dataInput->botol * $hargabotol;
            $dataInput->totalHargaOli = $dataInput->oli * $hargaoli;
        }

        return view('items.items', compact('dataInputs'));
    }

    public function create(): View
    {
        return view('items.items');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date_format:Y-m-d',
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

        DataItems::create($validatedData);

        return redirect()->route('items.index')->with(['success' => 'Data Berhasil Dimasukkan']);
    }
    public function show(DataItems $dataItem): View
    {
        $hargabl14_17 = Harga::where('item_name', 'Ban Luar R14, 17')->first()->harga ?? 0;
        $hargabl12_13 = Harga::where('item_name', 'Ban Luar R12, 13')->first()->harga ?? 0;
        $hargabd = Harga::where('item_name', 'Ban Dalam')->first()->harga ?? 0;
        $hargakrb = Harga::where('item_name', 'Karbu')->first()->harga ?? 0;
        $hargaAki = Harga::where('item_name', 'Aki')->first()->harga ?? 0;
        $hargaoli = Harga::where('item_name', 'Oli Bekas')->first()->harga ?? 0;
        $hargabotol = Harga::where('item_name', 'Botol')->first()->harga ?? 0;
        $hargaKardus = Harga::where('item_name', 'Kardus')->first()->harga ?? 0;

        $totalHargabl14_17 = $dataItem->bl14_17 * $hargabl14_17;
        $totalHargabl12_13 = $dataItem->bl12_13 * $hargabl12_13;
        $totalHargabd = $dataItem->bd * $hargabd;
        $totalHargaKrb = $dataItem->krb * $hargakrb;
        $totalHargaAki = $dataItem->aki * $hargaAki;
        $totalHargaOli = $dataItem->oli * $hargaoli;
        $totalHargaBotol = $dataItem->botol * $hargabotol;
        $totalHargaKardus = $dataItem->kardus * $hargaKardus;

        return view('item_show', compact('dataItem', 'totalHargaAki', 'totalHargaKardus', 'totalHargabl14_17', 'totalHargabl12_13', 'totalHargaKrb', 'totalHargabd', 'totalHargabotol', 'totalHargaOli'));
    }

    public function showDashboard()
    {

        $totalAki = DataItems::sum('aki');
        $totalBotol = DataItems::sum('botol');
        $totalOli = DataItems::sum('oli');
        $totalbl17 = DataItems::sum('bl14_17');
        $totalbl12 = DataItems::sum('bl12_13');
        $totalbd = DataItems::sum('bd');
        $totalkrb = DataItems::sum('krb');
        $totalkardus = DataItems::sum('kardus');

        return view('dashboard', compact('totalAki', 'totalBotol', 'totalOli', 'totalbl17', 'totalbl12', 'totalbd', 'totalkrb', 'totalkardus'));
    }

    public function printPDF(Request $request)
{
    $bulan = $request->bulan;

    $dataItems = DataItems::whereMonth('tanggal', $bulan)->get();

    foreach ($dataItems as $dataItem) {
        $hargabl14_17 = Harga::where('item_name', 'Ban Luar R14, 17')->first()->harga ?? 0;
        $hargabl12_13 = Harga::where('item_name', 'Ban Luar R12, 13')->first()->harga ?? 0;
        $hargabd = Harga::where('item_name', 'Ban Dalam')->first()->harga ?? 0;
        $hargakrb = Harga::where('item_name', 'Karbu')->first()->harga ?? 0;
        $hargaAki = Harga::where('item_name', 'Aki')->first()->harga ?? 0;
        $hargaoli = Harga::where('item_name', 'Oli Bekas')->first()->harga ?? 0;
        $hargabotol = Harga::where('item_name', 'Botol')->first()->harga ?? 0;
        $hargaKardus = Harga::where('item_name', 'Kardus')->first()->harga ?? 0;

        $dataItem->totalHargabl14_17 = $dataItem->bl14_17 * $hargabl14_17;
        $dataItem->totalHargabl12_13 = $dataItem->bl12_13 * $hargabl12_13;
        $dataItem->totalHargabd = $dataItem->bd * $hargabd;
        $dataItem->totalHargaKrb = $dataItem->krb * $hargakrb;
        $dataItem->totalHargaAki = $dataItem->aki * $hargaAki;
        $dataItem->totalHargaOli = $dataItem->oli * $hargaoli;
        $dataItem->totalHargabotol = $dataItem->botol * $hargabotol;
        $dataItem->totalHargaKardus = $dataItem->kardus * $hargaKardus;
    }

    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);

    $dompdf = new Dompdf($options);
    $pdf = $dompdf->loadHtml(View2::make('items.print_items', compact(
        'dataItems'
    ))->render());

    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    return $dompdf->stream('laporan-data-items'. $bulan .'.pdf');
}


}
