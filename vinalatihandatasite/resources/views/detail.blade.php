<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Pembelian</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f8d7ff, #c0d9ff, #f9c5ec);
      min-height: 100vh;
      color: #333;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #4a00e0, #8e2de2, #ff61d2);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.3rem;
      letter-spacing: 0.5px;
    }

    .btn-outline-light:hover {
      background-color: #ff85d2;
      border-color: #ff85d2;
      color: white;
    }

    /* Gambar mobil */
    img {
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
      object-fit: cover;
    }

    /* Judul dan harga */
    h2 {
      background: linear-gradient(90deg, #6a11cb, #ff61d2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
    }

    h4 {
      color: #2575fc;
      font-weight: bold;
    }

    /* Tombol */
    .btn-dark {
      background: linear-gradient(90deg, #6a11cb, #2575fc);
      border: none;
      transition: 0.3s;
    }

    .btn-dark:hover {
      background: linear-gradient(90deg, #ff61d2, #fe9090);
    }

    .btn-outline-secondary {
      border-color: #8e2de2;
      color: #8e2de2;
      transition: 0.3s;
    }

    .btn-outline-secondary:hover {
      background-color: #ff85d2;
      border-color: #ff85d2;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('produk') }}">🚗 Sistem Penjualan</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-5 mb-4 mb-md-0">
        <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}">
      </div>

      <div class="col-md-7">
        <h2>{{ $detail['nama'] }}</h2>
        <h4>Rp {{ is_numeric($detail['harga']) ? number_format($detail['harga'], 0, ',', '.') : $detail['harga'] }}</h4>
        <p class="mt-3">{{ $detail['deskripsi'] }}</p>

        <div class="mt-4">
          <button class="btn btn-dark me-2">Konfirmasi Pembelian</button>
          <a href="{{ route('produk') }}" class="btn btn-outline-secondary">Kembali ke Produk</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
