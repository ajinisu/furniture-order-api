<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function calculateShippingDate(Request $request)
    {
        // TODO:休日テーブル(holidays)を参照するロジックを実装
        return response()->json([
            'shipping_date' => $request->input('date') 
        ]);
    }
}
