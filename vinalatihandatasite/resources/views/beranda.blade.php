<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda | Sistem Penjualan Mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* 🌈 Background gradasi utama */
    body {
      background: linear-gradient(135deg, #a18cd1, #fbc2eb, #84fab0);
      background-size: 200% 200%;
      animation: gradientMove 10s ease infinite;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      color: #333;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* 🌟 Navbar transparan elegan */
    .navbar {
      background: rgba(66, 39, 90, 0.85);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
    }
    .navbar-brand {
      font-weight: 600;
      letter-spacing: 1px;
      color: #fff !important;
    }
    .btn-outline-light {
      border-color: #fff;
      color: #fff;
      transition: 0.3s;
    }
    .btn-outline-light:hover {
      background: #fff;
      color: #5a189a;
    }

    /* 🌸 Konten utama */
    .hero-section {
      margin-top: 100px;
      text-align: center;
    }
    .hero-section h1 {
      font-weight: 700;
      color: #4b0082;
      text-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .hero-section p {
      font-size: 1.2rem;
      color: #333;
    }

    /* 🚗 Gambar dan efek */
    .hero-image {
      margin-top: 40px;
      transition: transform 0.4s ease;
      filter: drop-shadow(0px 8px 12px rgba(0,0,0,0.2));
    }
    .hero-image:hover {
      transform: scale(1.08);
    }

    /* 💖 Tombol ajakan */
    .btn-primary {
      background: linear-gradient(90deg, #ff7eb3, #8ec5fc);
      border: none;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #8ec5fc, #e0c3fc);
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      color: #fff;
      margin-top: 100px;
      padding: 15px 0;
      background: rgba(66, 39, 90, 0.8);
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- 🌈 Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('beranda') }}">🚘 Showroom Mobil</a>
      <div class="d-flex">
        <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
      </div>
    </div>
  </nav>

  <!-- 🌸 Konten Utama -->
  <div class="container hero-section">
    <h1>Selamat Datang di Showroom Mobil Kami</h1>
    <p class="lead">Temukan mobil impian Anda dengan tampilan elegan dan performa luar biasa.</p>
    <a href="{{ route('login') }}" class="btn btn-primary btn-lg mt-3">Lihat Koleksi Mobil 🚗</a>
    <div>
      <img src="https://cdn-icons-png.flaticon.com/512/743/743922.png"
           width="250" alt="Mobil Icon" class="hero-image">
    </div>
  </div>

  <footer>
    © 2025 Sistem Penjualan Mobil | Desain oleh Devina 💜
  </footer>

</body>
</html>
