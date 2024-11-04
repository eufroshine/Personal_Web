<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website Dinamis</title>
  </head>
  <body>

    <!-- Navbar Dark -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">Eufroshine</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="?page=about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=contact">Contact</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Belajar
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="?page=tabel">Tabel</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
      <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];
          switch ($page) {
            case 'home':
              include "home.php";
              break;
            case 'about':
              include "about.php";
              break;
            case 'contact':
              include "contact.php";
              break;
            case 'tabel':
              include "tabel.php";
              break;
            default:
              echo "<h2>Page not found</h2>";
              break;
          }
        } else {
          include "home.php";
        }
      ?>
    </div>

 <!-- Footer -->
<footer class="bg-dark text-white text-center py-2 mt-3">
  <p class="m-0">&copy; <?php echo date("Y"); ?> Copyright</p>
</footer>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGFNk5QeDubB6Cgcr0JS+ZJqJ6fWujXbJ5gVdhHCSb6O" crossorigin="anonymous"></script>
  </body>
