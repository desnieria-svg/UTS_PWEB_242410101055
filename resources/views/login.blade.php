<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SegarBuah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #e8f5e9, #fff9c4, #fce4ec); min-height: 100vh; display: flex; align-items: center; justify-content: center;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-7">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-5 d-flex flex-column align-items-center justify-content-center p-4 text-white" style="background: linear-gradient(160deg, #1b5e20, #43a047);">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" width="85" class="mb-3">
                        <h4 class="fw-bold mb-2">SegarBuah</h4>
                        <p class="text-center mb-3" style="font-size: 13px; opacity: 0.9;">Kelola toko buah organikmu dengan mudah dan efisien</p>
                        <div style="font-size: 20px; letter-spacing: 3px;">🍎 🍊 🍋 🍇</div>
                        <div style="font-size: 20px; letter-spacing: 3px; margin-top: 4px;">🍓 🥝 🍌 🍉</div>
                    </div>

                    <div class="col-md-7 p-4 bg-white">
                        <h5 class="fw-bold mb-1">Selamat Datang 👋</h5>
                        <p class="text-muted mb-4" style="font-size: 14px;">Masuk ke panel admin SegarBuah</p>

                        @if(session('error'))
                            <div class="alert alert-danger py-2" style="font-size: 14px; border-radius: 10px;">{{ session('error') }}</div>
                        @endif

                        <form action="/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold" style="font-size: 13px; color: #555;">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username kamu" style="border-radius: 10px;">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold" style="font-size: 13px; color: #555;">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" style="border-radius: 10px;">
                            </div>
                            <button type="submit" class="btn w-100 text-white fw-semibold" style="background: linear-gradient(135deg, #2d6a2d, #43a047); border-radius: 10px; padding: 10px;">
                                Masuk ke Dashboard →
                            </button>
                        </form>
                        <p class="text-center text-muted mt-3 mb-0" style="font-size: 12px;">💡 Masukkan username apa saja untuk mencoba</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
