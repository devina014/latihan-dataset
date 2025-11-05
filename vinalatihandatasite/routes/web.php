<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Halaman Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses Login
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'admin' && $password === '12345') {
        return redirect()->route('produk');
    } else {
        return back()->with('error', 'Username atau Password salah!');
    }
})->name('login.process');

// Halaman Produk Mobil
Route::get('/produk', function () {
    $produk = [
        [
            'id' => 1,
            'nama' => 'Toyota Avanza',
            'harga' => 'Rp 250.000.000',
            'foto' => 'images/mobil_avanza.jpg',
            'deskripsi' => 'Mobil keluarga Toyota Avanza dengan mesin 1500cc, transmisi otomatis, dan fitur keselamatan lengkap.'
        ],
        [
            'id' => 2,
            'nama' => 'Honda Brio',
            'harga' => 'Rp 180.000.000',
            'foto' => 'images/mobil_brio.jpg',
            'deskripsi' => 'Mobil compact Honda Brio, irit bahan bakar dan cocok untuk penggunaan di perkotaan.'
        ],
        [
            'id' => 3,
            'nama' => 'Mitsubishi Pajero Sport',
            'harga' => 'Rp 550.000.000',
            'foto' => 'images/mobil_pajero.jpg',
            'deskripsi' => 'SUV tangguh Mitsubishi Pajero Sport dengan desain sporty dan performa mesin turbo diesel 2400cc.'
        ],
        [
            'id' => 4,
            'nama' => 'Suzuki Ertiga',
            'harga' => 'Rp 235.000.000',
            'foto' => 'images/mobil_ertiga.jpg',
            'deskripsi' => 'MPV nyaman Suzuki Ertiga dengan efisiensi bahan bakar tinggi dan interior luas untuk keluarga.'
        ],
        [
            'id' => 5,
            'nama' => 'Daihatsu Terios',
            'harga' => 'Rp 290.000.000',
            'foto' => 'images/mobil_terios.jpg',
            'deskripsi' => 'SUV modern Daihatsu Terios dengan tampilan gagah dan fitur keamanan ABS + Dual Airbag.'
        ],
        [
            'id' => 6,
            'nama' => 'Toyota Fortuner',
            'harga' => 'Rp 580.000.000',
            'foto' => 'images/mobil_fortuner.jpg',
            'deskripsi' => 'SUV premium Toyota Fortuner dengan mesin diesel 2400cc dan desain elegan untuk performa maksimal.'
        ],
    ];

    return view('produk', compact('produk'));
})->name('produk');

// Halaman Detail Mobil
Route::get('/produk/{id}', function ($id) {
    $produk = [
        1 => [
            'nama' => 'Toyota Avanza',
            'harga' => 'Rp 250.000.000',
            'foto' => 'images/mobil_avanza.jpg',
            'deskripsi' => 'Mobil keluarga Toyota Avanza dengan mesin 1500cc, transmisi otomatis, dan fitur keselamatan lengkap.'
        ],
        2 => [
            'nama' => 'Honda Brio',
            'harga' => 'Rp 180.000.000',
            'foto' => 'images/mobil_brio.jpg',
            'deskripsi' => 'Mobil compact Honda Brio, irit bahan bakar dan cocok untuk penggunaan di perkotaan.'
        ],
        3 => [
            'nama' => 'Mitsubishi Pajero Sport',
            'harga' => 'Rp 550.000.000',
            'foto' => 'images/mobil_pajero.jpg',
            'deskripsi' => 'SUV tangguh Mitsubishi Pajero Sport dengan desain sporty dan performa mesin turbo diesel 2400cc.'
        ],
        4 => [
            'nama' => 'Suzuki Ertiga',
            'harga' => 'Rp 235.000.000',
            'foto' => 'images/mobil_ertiga.jpg',
            'deskripsi' => 'MPV nyaman Suzuki Ertiga dengan efisiensi bahan bakar tinggi dan interior luas untuk keluarga.'
        ],
        5 => [
            'nama' => 'Daihatsu Terios',
            'harga' => 'Rp 290.000.000',
            'foto' => 'images/mobil_terios.jpg',
            'deskripsi' => 'SUV modern Daihatsu Terios dengan tampilan gagah dan fitur keamanan ABS + Dual Airbag.'
        ],
        6 => [
            'nama' => 'Toyota Fortuner',
            'harga' => 'Rp 580.000.000',
            'foto' => 'images/mobil_fortuner.jpg',
            'deskripsi' => 'SUV premium Toyota Fortuner dengan mesin diesel 2400cc dan desain elegan untuk performa maksimal.'
        ],
    ];

    // Pastikan ID valid
    if (!array_key_exists($id, $produk)) {
        abort(404, 'Mobil tidak ditemukan');
    }

    $detail = $produk[$id];
    return view('detail', compact('detail'));
})->name('produk.detail');

// Logout
Route::get('/logout', function () {
    return redirect()->route('beranda');
})->name('logout');
