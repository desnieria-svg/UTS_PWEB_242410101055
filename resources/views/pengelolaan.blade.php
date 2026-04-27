@extends('layouts.app')

@section('title', 'Pengelolaan Produk - SegarBuah')

@section('content') 

@include('partials.info-toko')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-1">📋 Pengelolaan Produk</h4>
        <p class="text-muted mb-0" style="font-size: 14px;">Daftar seluruh produk buah di toko SegarBuah</p>
    </div>
    <span class="badge text-white px-3 py-2" style="background-color: #2d6a2d; font-size: 13px; border-radius: 20px;">
        Total: {{ count($semuaBuah) }} Produk
    </span>
</div>

<div class="mb-3">
    <small class="text-muted">Login sebagai: <strong>{{ $username }}</strong></small>
</div>

<div class="row g-3">
    @foreach($semuaBuah as $buah)
    <div class="col-6 col-md-4 col-lg-3">
        <div class="card border-0 shadow-sm h-100" style="border-radius: 16px; overflow: hidden;">
            <div style="height: 140px; overflow: hidden;">
                <img src="{{ $buah['gambar'] }}" alt="{{ $buah['nama'] }}" style="width: 100%; height: 140px; object-fit: cover;">
            </div>
            <div class="p-3">
                <div class="d-flex justify-content-between align-items-start mb-1">
                    <h6 class="fw-semibold mb-0" style="font-size: 13px;">{{ $buah['nama'] }}</h6>
                    @if($buah['kategori'] == 'Import')
                        <span class="badge" style="background-color: #e8f0fe; color: #1a56db; font-size: 10px;">Import</span>
                    @else
                        <span class="badge" style="background-color: #e8f5e8; color: #2d6a2d; font-size: 10px;">Lokal</span>
                    @endif
                </div>
                <p class="fw-bold mb-1" style="color: #2d6a2d; font-size: 13px;">Rp {{ number_format($buah['harga'], 0, ',', '.') }} / {{ $buah['satuan'] }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Stok: {{ $buah['stok'] }}</small>
                    @if($buah['stok'] < 20)
                        <span style="font-size: 11px; color: #e65100;">⚠️ Hampir Habis</span>
                    @else
                        <span style="font-size: 11px; color: #2d6a2d;">✅ Tersedia</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-3 text-end">
    <small class="text-muted">Menampilkan {{ count($semuaBuah) }} produk</small>
</div>

@endsection
