<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
</head>
<body>
    <h1>Rekap Statistik Penjualan - {{ $bulan }}</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Unit Terjual</th>
                <th>Total Penjualan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekapPenjualan as $item)
                <tr>
                    <td>{{ $item['produk'] }}</td>
                    <td>{{ $item['terjual'] }}</td>
                    <td>Rp {{ number_format($item['total'], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total Omzet: Rp {{ number_format($totalOmzet, 0, ',', '.') }}</h3>
</body>
</html>
