<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function dashboard()
    {
        $shop = Auth::user()->shop;
        return view('shop.dashboard', compact('shop'));
    }

    public function generateLink()
    {
        $shop = Auth::user()->shop;

        if (!$shop) {
            abort(404, 'Shop profile not found');
        }

        if (!$shop->loyalty_token) {
            $shop = Auth::user()->shop; 
            $shop->loyalty_token = Str::uuid();
            $shop->save();
        }

        return back()->with('success', 'Loyalty link generated');
    }

    private function shortToken(string $token): string
    {
        return substr(hash('sha256', $token), 0, 10);
    }
}
