<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Sistem Penjualan Mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* 🌈 Background gradasi animasi */
    body {
      background: linear-gradient(135deg, #fbc2eb, #a6c1ee, #d4a5ff);
      background-size: 200% 200%;
      animation: gradientFlow 10s ease infinite;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }

    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* 🌸 Card login transparan */
    .card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      transition: 0.4s;
    }
    .card:hover {
      transform: translateY(-5px);
    }

    /* 💜 Header card */
    .card-header {
      background: linear-gradient(90deg, #a18cd1, #fbc2eb);
      color: #fff;
      font-weight: 600;
      letter-spacing: 0.5px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }

    /* 💠 Tombol */
    .btn-dark {
      background: linear-gradient(90deg, #ff7eb3, #8ec5fc);
      border: none;
      font-weight: 600;
      transition: all 0.3s ease;
      color: #fff;
    }
    .btn-dark:hover {
      background: linear-gradient(90deg, #8ec5fc, #e0c3fc);
      transform: scale(1.05);
      color: #fff;
    }

    /* 📋 Input field */
    .form-control {
      border-radius: 10px;
      border: 1px solid #ccc;
      transition: 0.3s;
    }
    .form-control:focus {
      border-color: #a18cd1;
      box-shadow: 0 0 8px rgba(161, 140, 209, 0.4);
    }

    /* 🪶 Footer info */
    .card-footer {
      background: transparent;
      font-size: 0.9rem;
      color: #555;
    }

    /* 🚗 Animasi ikon */
    .login-icon {
      width: 70px;
      margin-bottom: 10px;
      filter: drop-shadow(0 3px 6px rgba(0,0,0,0.2));
      animation: floatCar 3s ease-in-out infinite;
    }
    @keyframes floatCar {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/743/743922.png" alt="Car Icon" class="login-icon">
            <h4>Login Sistem Penjualan Mobil</h4>
          </div>
          <div class="card-body">
            @if(session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('login.process') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-dark">Masuk 🚗</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center">
            <small>Gunakan <b>admin</b> / <b>12345</b> untuk login</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
