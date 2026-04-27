@extends('layouts.app')

@section('title', 'Dashboard - SegarBuah')

@section('content')

@include('partials.info-toko')

<div class="p-4 mb-4 rounded-4 text-white" style="background: linear-gradient(135deg, #2d6a2d, #66bb6a);">
    <div class="row align-items-center">
        <div class="col"> 
            <h4 class="fw-bold mb-1">Halo, {{ $username }}! 👋</h4>
            <p class="mb-0" style="opacity: 0.9;">Selamat datang kembali di panel admin SegarBuah</p>
        </div>
        <div class="col-auto text-end">
            <small style="opacity: 0.8;">{{ date('l, d F Y') }}</small>
        </div>
    </div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">🌟 Produk Unggulan</h5>
    <a href="/pengelolaan?username={{ urlencode($username) }}" class="btn btn-sm" style="color: #2d6a2d; border: 1px solid #2d6a2d;">Lihat Semua →</a>
</div>

<div class="row g-3 mb-4">
    @foreach($produkUnggulan as $produk)
    <div class="col-6 col-md-3">
        <div class="card border-0 shadow-sm h-100" style="border-radius: 16px; overflow: hidden;">
            <div style="background-color: {{ $produk['warna'] }}; height: 150px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                <img src="{{ $produk['gambar'] }}" alt="{{ $produk['nama'] }}" style="width: 100%; height: 150px; object-fit: cover;">
            </div>
            <div class="p-3 text-center">
                <h6 class="fw-semibold mb-1" style="font-size: 13px;">{{ $produk['nama'] }}</h6>
                <p class="fw-bold mb-1" style="color: #2d6a2d; font-size: 14px;">Rp {{ number_format($produk['harga'], 0, ',', '.') }} / {{ $produk['satuan'] }}</p>
                <small class="text-muted">Stok: {{ $produk['stok'] }} {{ $produk['satuan'] }}</small><br>
                @if($produk['stok'] < 20)
                    <span class="badge mt-1" style="background-color: #ffe0b2; color: #e65100; font-size: 11px;">Hampir Habis</span>
                @else
                    <span class="badge mt-1" style="background-color: #c8e6c9; color: #2d6a2d; font-size: 11px;">Tersedia</span>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<h5 class="fw-bold mb-3">Menu Cepat</h5>
<div class="row g-3">
    <div class="col-4">
        <a href="/pengelolaan?username={{ urlencode($username) }}" class="card border-0 shadow-sm text-center p-3 text-decoration-none" style="border-radius: 16px; background: linear-gradient(135deg, #e8f5e9, #c8e6c9);">
            <div style="font-size: 28px;">📋</div>
            <small class="fw-semibold" style="color: #2d6a2d;">Kelola Produk</small>
        </a>
    </div>
    <div class="col-4">
        <a href="/profile?username={{ urlencode($username) }}" class="card border-0 shadow-sm text-center p-3 text-decoration-none" style="border-radius: 16px; background: linear-gradient(135deg, #e3f2fd, #bbdefb);">
            <div style="font-size: 28px;">👤</div>
            <small class="fw-semibold" style="color: #1565c0;">Profil Saya</small>
        </a>
    </div>
    <div class="col-4">
        <a href="/logout" class="card border-0 shadow-sm text-center p-3 text-decoration-none" style="border-radius: 16px; background: linear-gradient(135deg, #fce4ec, #f8bbd0);">
            <div style="font-size: 28px;">🚪</div>
            <small class="fw-semibold" style="color: #c62828;">Keluar</small>
        </a>
    </div>
</div>

@endsection
