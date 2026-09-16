<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $bulan = "September 2026";

        $rekapPenjualan = [
            ['produk' => 'Laptop ThinkPad', 'terjual' => 15, 'total' => 187500000],
            ['produk' => 'Mouse Wireless', 'terjual' => 42, 'total' => 10500000],
            ['produk' => 'Mechanical Keyboard', 'terjual' => 28, 'total' => 23800000],
        ];

        $totalOmzet = array_sum(array_column($rekapPenjualan, 'total'));

        return view('laporan.penjualan', compact('bulan', 'rekapPenjualan', 'totalOmzet'));
    }
}
