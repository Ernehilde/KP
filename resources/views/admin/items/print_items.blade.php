<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Items</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>

<body>
    <h2>Laporan Data Items Bulan {{ \Carbon\Carbon::parse($dataItems->first()->tanggal)->format('F Y') }}</h2>
    <table>
        <thead>
            <tr>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @foreach ($dataItems as $dataItem)
                @php
                    $total +=
                        $dataItem->totalHargabl14_17 +
                        $dataItem->totalHargabl12_13 +
                        $dataItem->totalHargabd +
                        $dataItem->totalHargaKrb +
                        $dataItem->totalHargaAki +
                        $dataItem->totalHargaOli +
                        $dataItem->totalHargabotol +
                        $dataItem->totalHargaKardus;
                @endphp
            @endforeach
            <tr>
                <td>Ban Luar R14, 17</td>
                <td>{{ $dataItems->sum('bl14_17') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargabl14_17;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td>Ban Luar R12, 13</td>
                <td>{{ $dataItems->sum('bl12_13') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargabl12_13;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td>Ban Dalem</td>
                <td>{{ $dataItems->sum('bd') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargabd;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td>Karbu</td>
                <td>{{ $dataItems->sum('krb') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargaKrb;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td>Aki</td>
                <td>{{ $dataItems->sum('aki') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargaAki;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td>Oli</td>
                <td>{{ $dataItems->sum('oli') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargaOli;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td>Botol</td>
                <td>{{ $dataItems->sum('botol') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargabotol;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td>Kardus</td>
                <td>{{ $dataItems->sum('kardus') }} pcs</td>
                <td>Rp
                    {{ number_format(
                        $dataItems->sum(function ($item) {
                            return $item->totalHargaKardus;
                        }),
                        2,
                    ) }}
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-right"><strong>Total</strong></td>
                <td><strong>Rp {{ number_format($total, 2) }}</strong></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
