<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $shop->name }} Loyalty Program</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-sm" style="max-width: 420px; width: 100%;">
        <div class="card-header text-center bg-dark text-white">
            <h5 class="mb-0">{{ $shop->name }} Loyalty Program</h5>
        </div>

        <div class="card-body text-center">
            <p class="text-muted mb-4">
                Add this loyalty card to your mobile wallet and start earning rewards.
            </p>

            <a href="{{ url('/wallet/google') }}" class="btn btn-success w-100 mb-3">
                Add to Google Wallet
            </a>

            <a href="{{ url('/wallet/apple') }}" class="btn btn-dark w-100">
                Add to Apple Wallet
            </a>
        </div>

        <div class="card-footer text-center text-muted small">
            Powered by Loyalty Program System
        </div>
    </div>

</body>
</html>
