@props([
    'dataItem',
    'totalHargaAki',
    'totalHargaKardus',
    'totalHargabl14_17',
    'totalHargabl12_13',
    'totalHargaKrb',
    'totalHargabd',
    'totalHargabotol',
    'totalHargaOli'
])

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#show-item-modal-{{ $dataItem->id }}">
    Show
</button>
<div class="modal fade" id="show-item-modal-{{ $dataItem->id }}" tabindex="-1" aria-labelledby="showItemModalLabel-{{ $dataItem->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showItemModalLabel-{{ $dataItem->id }}"><strong> Detail Data Barang </strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center align-middle">Barang</th>
                            <th scope="col" class="text-center align-middle">Jumlah</th>
                            <th scope="col" class="text-center align-middle">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ban Luar R14, 17</td>
                            <td>{{ $dataItem->bl14_17 }} pcs</td>
                            <td>Rp {{ number_format($totalHargabl14_17, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Ban Luar R12, 13</td>
                            <td>{{ $dataItem->bl12_13 }} pcs</td>
                            <td>Rp {{ number_format($totalHargabl12_13, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Ban Dalem</td>
                            <td>{{ $dataItem->bd }} pcs</td>
                            <td>Rp {{ number_format($totalHargabd, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Karbu</td>
                            <td>{{ $dataItem->krb }} pcs</td>
                            <td>Rp {{ number_format($totalHargaKrb, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Aki</td>
                            <td>{{ $dataItem->aki }} pcs</td>
                            <td>Rp {{ number_format($totalHargaAki, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Oli</td>
                            <td>{{ $dataItem->oli }} pcs</td>
                            <td>Rp {{ number_format($totalHargaOli, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Botol</td>
                            <td>{{ $dataItem->botol }} pcs</td>
                            <td>Rp {{ number_format($totalHargabotol, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Kardus</td>
                            <td>{{ $dataItem->kardus }} pcs</td>
                            <td>Rp {{ number_format($totalHargaKardus, 2) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right"><strong>Total</strong></td>
                            <td><strong>Rp {{ number_format($totalHargabl14_17 + $totalHargabl12_13 + $totalHargabd + $totalHargaKrb + $totalHargaAki + $totalHargaOli + $totalHargabotol + $totalHargaKardus, 2) }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
