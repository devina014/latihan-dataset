<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Showroom Mobil</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
  <style>
    /* Background dan warna utama */
    body {
      background: linear-gradient(135deg, #f8d7ff, #c0d9ff, #f9c5ec);
      min-height: 100vh;
      color: #333;
    }

    /* Navbar gradasi */
    .navbar {
      background: linear-gradient(90deg, #4a00e0, #8e2de2, #ff61d2);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.4rem;
      letter-spacing: 0.5px;
    }

    /* Tombol logout */
    .btn-outline-light {
      border-color: #fff;
      color: #fff;
      transition: 0.3s;
    }

    .btn-outline-light:hover {
      background-color: #ff85d2;
      border-color: #ff85d2;
    }

    /* Card mobil */
    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
    }

    .card-body {
      background: rgba(255, 255, 255, 0.9);
    }

    /* Tombol lihat detail */
    .btn-dark {
      background: linear-gradient(90deg, #6a11cb, #2575fc);
      border: none;
      transition: 0.3s;
    }

    .btn-dark:hover {
      background: linear-gradient(90deg, #ff61d2, #fe9090);
    }

    /* Judul halaman */
    h2 {
      background: linear-gradient(90deg, #6a11cb, #ff61d2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">🚗 Showroom Mobil</a>
      <div class="d-flex">
        <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Mobil Terbaru</h2>
    <div class="row justify-content-center">
      @foreach($produk as $item)
      <div class="col-md-3">
        <div class="card mb-4 shadow-sm">
          <img src="{{ asset($item['foto']) }}" class="card-img-top" alt="{{ $item['nama'] }}" style="height:200px; object-fit:cover;">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $item['nama'] }}</h5>

            <!-- Aman dari error number_format -->
            <p class="card-text text-muted">
              Harga: Rp {{ is_numeric($item['harga']) ? number_format($item['harga'], 0, ',', '.') : $item['harga'] }}
            </p>

            <a href="{{ route('produk.detail', $item['id']) }}" class="btn btn-dark">Lihat Detail</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</body>
</html>
