<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function apple()
    {
        return response()->download(
            storage_path('app/mock/apple.pkpass'),
            'loyalty.pkpass'
        );
    }

    public function google()
    {
        return response()->download(
            storage_path('app/mock/google_pass.json'),
            'google_wallet_pass.json'
        );
    }
}
