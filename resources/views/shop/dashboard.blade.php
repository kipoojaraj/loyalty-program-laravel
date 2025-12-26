@php
use Illuminate\Support\Str;
@endphp

<x-app-layout>
    <div class="container my-5 d-flex justify-content-center">
        <div class="card shadow-sm" style="max-width: 500px; width: 100%;">
            <div class="card-header bg-dark text-white text-center">
                <h5 class="mb-0">Shop Dashboard</h5>
            </div>
            <div class="card-body text-center">
                @if(!$shop->loyalty_token)
                    <p class="mb-4">Generate your loyalty link to share with customers.</p>
                    <form method="POST" action="/shop/generate-link">
                        @csrf
                        <button type="submit" class="btn btn-primary w-100">Generate Loyalty Link</button>
                    </form>
                @else
                    <p class="mb-3">Your Loyalty Link:</p>
                    <a href="{{ url('/loyalty/' . Str::slug($shop->name) . '/' . $shop->loyalty_token) }}" 
                       class="btn btn-success w-100 mb-2" target="_blank">
                        Open Loyalty Link
                    </a>
                    <input
                        type="text"
                        class="form-control text-center"
                        readonly
                        value="{{ url('/loyalty/' . Str::slug($shop->name) . '/' . $shop->loyalty_token) }}">
                @endif
            </div>
            <div class="card-footer text-muted text-center">
                Share this link with your customers
            </div>
        </div>
    </div>

    <!-- Bootstrap CDN (if not already in layout) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</x-app-layout>
