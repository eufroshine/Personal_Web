<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    
    <title>Abidzar's Cyberpunk Website</title>

    <!-- Custom CSS -->
    <style>
      /* General Body Styling */
      body {
        background-color: #0d0d0d; /* Dark cyberpunk background */
        color: #ffffff;
        font-family: 'Orbitron', sans-serif;
        overflow-x: hidden;
      }
      
      /* Header Styling */
      header h1 {
        color: #00e5ff; /* Neon cyan */
        text-shadow: 0 0 10px #00e5ff, 0 0 20px #00e5ff;
        font-size: 2.5rem;
      }
      
      header p {
        font-size: 1.2rem;
        color: #ff1c8d; /* Neon pink */
        text-shadow: 0 0 8px #ff1c8d;
      }

      /* Card Styles */
      .col-md-4 {
        background: rgba(25, 25, 25, 0.9); /* Dark background for cards */
        padding: 20px;
        border-radius: 15px;
        margin-top: 20px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.8);
        transition: transform 0.3s, box-shadow 0.3s;
      }

      .col-md-4:hover {
        transform: scale(1.05);
        box-shadow: 0 0 15px 5px #ff1c8d, 0 0 25px 10px #00e5ff;
      }

      /* Button Styling */
      .btn-primary {
        background-color: #00e5ff;
        border: none;
        color: #0d0d0d;
        text-shadow: 0 0 8px #ffffff;
      }

      .btn-primary:hover {
        background-color: #ff1c8d;
        color: #ffffff;
      }

      /* Image Styling */
      .rounded-circle {
        width: 150px; /* Ukuran gambar untuk about */
        height: 150px; /* Ukuran gambar untuk about */
        object-fit: cover; /* Memastikan gambar tetap proporsional */
      }
    </style>
  </head>
  <body>
    <!-- Header Section -->
    <header class="text-center mt-5">
      <h1>Selamat Datang di Website Pribadi Saya</h1>
      <p class="lead mt-3">Jelajahi dunia saya untuk mengetahui saya lebih lanjut. Terima kasih telah berkunjung!</p>
    </header>

    <!-- Content Section -->
    <div class="container mt-5">
      <div class="row justify-content-center">
        <!-- About Me Section -->
        <div class="col-md-4 text-center">
          <img src="image/about.jpeg" class="rounded-circle mb-3" alt="Foto Profil">
          <h3>About Me</h3>
          <p>Halo, saya Abidzar Sabil Handoyo, lahir di Purwakarta dan saat ini sedang menempuh pendidikan di Universitas Pelita Bangsa, jurusan Teknik Informatika.</p>
          <a href="?page=about" class="btn btn-primary">Lebih Lanjut</a>
        </div>

        <!-- Contact Section -->
        <div class="col-md-4 text-center">
          <img src="image/contact.jpeg" class="rounded-circle mb-3" alt="Kontak">
          <h3>Kontak</h3>
          <p>Ingin bekerja sama atau sekadar berbicara? Jangan ragu untuk menghubungi saya. Saya senang mendengar dari Anda!</p>
          <a href="?page=contact" class="btn btn-primary">Hubungi Saya</a>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
