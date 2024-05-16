<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tadika XYZ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Baloo Tamma 2', cursive;
      background-color: #f8f9fa;
      color: #343a40;
    }
    .background {
      background-image: url('2.jpg'); /* Ganti dengan URL gambar latar sekolah Anda */
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .navbar {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
    }
    .navbar-brand {
      font-size: 24px;
      font-weight: 700;
      color: #007bff;
    }
    .navbar-nav .nav-link {
      font-size: 18px;
      font-weight: 400;
      color: #343a40;
    }
    .content-wrapper {
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px 0;
      max-width: 100%;
    }
    h1, h2, h3, h4, h5, h6 {
      font-weight: 700;
      color: #007bff;
    }
    p {
      color: #6c757d;
    }
    footer {
      background-color: #f8f9fa;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="background">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="fas fa-school"></i> Tadika XYZ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-newspaper"></i> Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-images"></i> Album</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-phone-alt"></i> Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="container mt-5 flex-grow-1">
      <div class="content-wrapper mx-auto">
        <h1>Selamat Datang di Tadika XYZ</h1>
        <p>Website ini merupakan sarana informasi untuk orang tua dan anak-anak tentang kegiatan tadika, berita terkini, dan lainnya.</p>
        <h2>Biodata Tadika</h2>
        <p>Tadika XYZ adalah tadika yang berkomitmen untuk memberikan pendidikan prasekolah berkualitas bagi anak-anak usia dini. Kami memiliki kurikulum yang didesain untuk merangsang perkembangan kognitif, motorik, dan sosial anak-anak.</p>
        <p>Alamat: Jl. Contoh No. 123, Kota Anda</p>
        <p>Telp: 0123456789</p>
        <p>Email: info@tadikaxyz.com</p>
      </div>
    </div>

    <footer class="text-center py-4 mt-auto">
      <div class="container">
        <p>&copy; 2024 Tadika XYZ. All Rights Reserved.</p>
      </div>
    </footer>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl0DZWbFNMhG3ObmK4pAO4ER3Ercn/tk/tLk4H3W7rSK5tq6p2X2C1wPSmy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGwiYHL5h1n6kyeI3uY1V6p2YK4XNqO2l2XxPfRm7RSm4Vh5Pf5KgzI5H7X" crossorigin="anonymous"></script>
</body>
</html>
