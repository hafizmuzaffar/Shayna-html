<?php

namespace App\Http\Controllers\API;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $product = Transaction::with(['details.product'])->find($id);

        if ($product)
            return ResponseFormatter::success($product, 'Data Transaksi berhasil diambil');
        else
            return ResponseFormatter::error($product, 'Data Transaksi tidak ada ', 404);
    }
}
