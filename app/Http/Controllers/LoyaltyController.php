<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class LoyaltyController extends Controller
{
    public function show($shopName, $token)
    {
        $shop = Shop::where('loyalty_token', $token)->firstOrFail();

        return view('loyalty.page', compact('shop'));
    }
}
