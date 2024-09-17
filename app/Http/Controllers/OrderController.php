<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view(Order $order)
    {
        return view('orders.view', [
            'order' => $order,
        ]);
    }
}
