<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc 2</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Giải phương trình bậc 2</h3>
                    </div>
                    <div class="card-body">
                        <form action="/giai" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="a" class="form-label">Nhập a:</label>
                                <input type="number" step="any" class="form-control @error('a') is-invalid @enderror" id="a" name="a"  value="{{ old('a') }}">
                                @error('a')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
    
                            <div class="mb-3">
                                <label for="b" class="form-label">Nhập b:</label>
                                <input type="number" step="any" class="form-control @error('b') is-invalid @enderror" id="b" name="b"  value="{{ old('b') }}">
                                @error('b')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
    
                            <div class="mb-3">
                                <label for="c" class="form-label">Nhập c:</label>
                                <input type="number" step="any" class="form-control @error('c') is-invalid @enderror" id="c" name="c"  value="{{ old('c') }}">
                                @error('c')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
    
                            <button type="submit" class="btn btn-success w-100">Giải</button>
                        </form>
    
                        @if(session('result'))
                            <div class="alert alert-info mt-4" role="alert">
                                <strong>Kết quả:</strong> {{ session('result') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS và các phụ thuộc (như Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
