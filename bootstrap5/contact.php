<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <title>Contact - Abidzar's Cyberpunk Website</title>

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

      /* Social Media Box Styles */
      .social-media {
        background: rgba(25, 25, 25, 0.9); /* Dark background for boxes */
        padding: 20px;
        border-radius: 15px;
        margin-top: 20px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.8);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
      }

      .social-media:hover {
        transform: scale(1.05);
        box-shadow: 0 0 15px 5px #ff1c8d, 0 0 25px 10px #00e5ff;
      }

      .social-media a {
        color: #00e5ff;
        text-decoration: none;
        font-size: 1.5rem;
        transition: color 0.3s;
      }

      .social-media a:hover {
        color: #ff1c8d;
      }

      .social-icon {
        font-size: 2rem;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <!-- Header Section -->
    <header class="text-center mt-5">
      <h1>Kontak Saya</h1>
      <p class="lead mt-3">Hubungi saya melalui akun media sosial di bawah ini.</p>
    </header>

    <!-- Content Section -->
    <div class="container mt-5">
      <div class="row">
        <!-- Instagram Box -->
        <div class="col-md-4">
          <div class="social-media">
            <a href="https://www.instagram.com/abdzrsbil_" target="_blank">
              <i class="fab fa-instagram social-icon"></i> Instagram
            </a>
            <p class="mt-2">Anda bisa menghubungi saya lewat Instagram. Saya senang berbagi tentang teknologi dan hobi saya!</p>
          </div>
        </div>

        <!-- Email Box -->
        <div class="col-md-4">
          <div class="social-media">
            <a href="mailto:abidzarsabil05@gmail.com">
              <i class="fas fa-envelope social-icon"></i> Email
            </a>
            <p class="mt-2">Jika Anda ingin berdiskusi lebih lanjut, silakan kirim email kepada saya.</p>
          </div>
        </div>

        <!-- Line Box -->
        <div class="col-md-4">
          <div class="social-media">
            <a href="https://line.me/ti/p/~your_line_id" target="_blank">
              <i class="fab fa-line social-icon"></i> Line
            </a>
            <p class="mt-2">Hubungi saya lewat Line jika Anda lebih suka chat langsung.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
