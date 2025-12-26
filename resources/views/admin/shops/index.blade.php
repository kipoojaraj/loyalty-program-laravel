<x-app-layout>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Shops</h2>
        </div>

        @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif

        <div class="card mb-5 shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Create New Shop</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/shops">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Shop Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter shop name" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter shop email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" required>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Create Shop</button>
                </form>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Shop List</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Loyalty Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shops as $shop)
                            <tr>
                                <td>{{ $shop->name }}</td>
                                <td>{{ $shop->email }}</td>
                                <td>
                                    @if($shop->loyalty_token)
                                    <a href="{{ url('/loyalty/' . Str::slug($shop->name) . '/' . $shop->loyalty_token) }}" target="_blank">
                                        {{ url('/loyalty/' . Str::slug($shop->name) . '/' . $shop->loyalty_token) }}
                                    </a>
                                    @else
                                    <span class="text-muted">Not generated</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer d-flex justify-content-between align-items-center">
                <span>Total Shops: {{ $shops->total() }}</span>
                <div>
                    {{ $shops->links('pagination::bootstrap-5') }}
                </div>
            </div>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</x-app-layout>