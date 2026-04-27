<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    { 
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (empty($username) || empty($password)) {
            return redirect('/')->with('error', 'Username dan password tidak boleh kosong!');
        }

        return redirect('/dashboard?username=' . urlencode($username));
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Tamu');

        $produkUnggulan = [
            ['nama' => 'Mangga Harum Manis', 'harga' => 25000, 'satuan' => 'kg', 'stok' => 50, 'warna' => '#fff8e1', 'gambar' => 'images/buah/mangga.jpg'],
            ['nama' => 'Jeruk Siam Pontianak', 'harga' => 18000, 'satuan' => 'kg', 'stok' => 80, 'warna' => '#fff3e0', 'gambar' => 'images/buah/jeruk.jpg'],
            ['nama' => 'Semangka Tanpa Biji', 'harga' => 12000, 'satuan' => 'kg', 'stok' => 30, 'warna' => '#fce4ec', 'gambar' => 'images/buah/semangka.jpg'],
            ['nama' => 'Anggur Merah Import', 'harga' => 45000, 'satuan' => 'kg', 'stok' => 15, 'warna' => '#f3e5f5', 'gambar' => 'images/buah/anggur.jpg'],
        ];

        return view('dashboard', compact('username', 'produkUnggulan'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Tamu');

        $semuaBuah = [
            ['id' => 1, 'nama' => 'Mangga Harum Manis', 'kategori' => 'Lokal', 'harga' => 25000, 'stok' => 50, 'satuan' => 'kg', 'gambar' => 'images/buah/mangga.jpg'],
            ['id' => 2, 'nama' => 'Jeruk Siam Pontianak', 'kategori' => 'Lokal', 'harga' => 18000, 'stok' => 80, 'satuan' => 'kg', 'gambar' => 'images/buah/jeruk.jpg'],
            ['id' => 3, 'nama' => 'Semangka Tanpa Biji', 'kategori' => 'Lokal', 'harga' => 12000, 'stok' => 30, 'satuan' => 'kg', 'gambar' => 'images/buah/semangka.jpg'],
            ['id' => 4, 'nama' => 'Anggur Merah Import', 'kategori' => 'Import', 'harga' => 45000, 'stok' => 15, 'satuan' => 'kg', 'gambar' => 'images/buah/anggur.jpg'],
            ['id' => 5, 'nama' => 'Strawberry Lokal', 'kategori' => 'Lokal', 'harga' => 35000, 'stok' => 25, 'satuan' => 'kg', 'gambar' => 'images/buah/strawberry.jpg'],
            ['id' => 6, 'nama' => 'Durian Musang King', 'kategori' => 'Lokal', 'harga' => 95000, 'stok' => 10, 'satuan' => 'kg', 'gambar' => 'images/buah/durian.jpg'],
            ['id' => 7, 'nama' => 'Apel Fuji Import', 'kategori' => 'Import', 'harga' => 40000, 'stok' => 60, 'satuan' => 'kg', 'gambar' => 'images/buah/apel.jpg'],
            ['id' => 8, 'nama' => 'Pisang Cavendish', 'kategori' => 'Lokal', 'harga' => 15000, 'stok' => 100, 'satuan' => 'sisir', 'gambar' => 'images/buah/pisang.jpg'],
            ['id' => 9, 'nama' => 'Kiwi Green Import', 'kategori' => 'Import', 'harga' => 55000, 'stok' => 35, 'satuan' => 'kg', 'gambar' => 'images/buah/kiwi.jpg'],
            ['id' => 10, 'nama' => 'Pepaya California', 'kategori' => 'Lokal', 'harga' => 8000, 'stok' => 45, 'satuan' => 'kg', 'gambar' => 'images/buah/pepaya.jpg'],
        ];

        return view('pengelolaan', compact('username', 'semuaBuah'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Tamu');

        $infoProfil = [
            'nama' => $username,
            'role' => 'Admin Toko',
            'email' => strtolower(str_replace(' ', '', $username)) . '@segarbuah.id',
            'telepon' => '0812-3456-7890',
            'alamat' => 'Jl. Buah Segar No. 12, Jember',
            'bergabung' => 'Januari 2024',
        ];

        $aktivitas = [
            ['aksi' => 'Menambah stok Mangga Harum Manis', 'waktu' => '2 jam lalu'],
            ['aksi' => 'Update harga Anggur Merah Import', 'waktu' => '1 hari lalu'],
            ['aksi' => 'Cek stok keseluruhan produk', 'waktu' => '2 hari lalu'],
            ['aksi' => 'Tambah produk baru: Kiwi Green Import', 'waktu' => '5 hari lalu'],
        ];

        return view('profile', compact('username', 'infoProfil', 'aktivitas'));
    }

    public function logout()
    {
        return redirect('/');
    }
}
