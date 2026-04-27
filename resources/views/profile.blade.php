@extends('layouts.app')

@section('title', 'Profil - SegarBuah')

@section('content') 

<div class="mb-4">
    <h4 class="fw-bold mb-1">👤 Profil Pengguna</h4>
    <p class="text-muted mb-0" style="font-size: 14px;">Informasi akun dan aktivitas terkini</p>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm text-center p-4">
            <div class="rounded-circle mx-auto d-flex align-items-center justify-content-center text-white fw-bold mb-3"
                style="width: 75px; height: 75px; background-color: #2d6a2d; font-size: 26px;">
                {{ strtoupper(substr($username, 0, 2)) }}
            </div>
            <h5 class="fw-bold mb-1">{{ $infoProfil['nama'] }}</h5>
            <span class="badge mb-3" style="background-color: #e8f5e8; color: #2d6a2d;">{{ $infoProfil['role'] }}</span>

            <div class="text-start" style="font-size: 14px;">
                <div class="d-flex gap-2 mb-2">
                    <span>📧</span>
                    <span class="text-muted">{{ $infoProfil['email'] }}</span>
                </div>
                <div class="d-flex gap-2 mb-2">
                    <span>📞</span>
                    <span class="text-muted">{{ $infoProfil['telepon'] }}</span>
                </div>
                <div class="d-flex gap-2 mb-2">
                    <span>📍</span>
                    <span class="text-muted">{{ $infoProfil['alamat'] }}</span>
                </div>
                <div class="d-flex gap-2">
                    <span>📅</span>
                    <span class="text-muted">Bergabung: {{ $infoProfil['bergabung'] }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card border-0 shadow-sm p-4">
            <h5 class="fw-bold mb-1">🕓 Aktivitas Terakhir</h5>
            <p class="text-muted mb-4" style="font-size: 14px;">Riwayat aksi yang dilakukan oleh <strong>{{ $username }}</strong></p>

            @foreach($aktivitas as $item)
            <div class="d-flex gap-3 align-items-start mb-3 pb-3 border-bottom">
                <div class="rounded-circle mt-1" style="width: 10px; height: 10px; min-width: 10px; background-color: #2d6a2d;"></div>
                <div>
                    <p class="mb-0" style="font-size: 14px;">{{ $item['aksi'] }}</p>
                    <small class="text-muted">{{ $item['waktu'] }}</small>
                </div>
            </div>
            @endforeach

            <a href="/dashboard?username={{ urlencode($username) }}" class="btn btn-sm mt-2"
                style="border: 1px solid #2d6a2d; color: #2d6a2d;">
                ← Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>

@endsection
