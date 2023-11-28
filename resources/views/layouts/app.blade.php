<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blade demo</title>
    <link href="<https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css>" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar nav-padding navbar-expand-lg navbar-dark position-fixed w-100 wave-animation navbarSaya" id="myNavbar" >
      <div class="container">
        <a class="navbar-brand no-effect" href="index.php">
          <img src="konekin-bulat.png" alt="" width="35" class="d-inline-block align-text-top me-2" />
          Konekin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-4">
              <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
            </li>
            
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acara</a >
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                <li><a class="dropdown-item" href="user/auth.php" >Organisasi</a></li>
                <li><a class="dropdown-item" href="user/auth.php" >Individu</a></li>
              </ul>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link"  href="user/auth.php">Forum</a>
            </li>
          </ul>
          <div>
            <button class="button-primary"><a href="Masuk">Masuk</a></button>
            <a class="button-secondary" href="Daftar" >Daftar</a>
          </div>
        </div>
      </div>
    </nav>


    @yield('content')

    <script src="<https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js>" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    // Konfigurasi Swiper di sini
  });
</script>

<!-- TESTI END -->

<script>
  const buttonPrimary = document.querySelector(".button-primary");
  const buttonSecondary = document.querySelector(".button-secondary");

  buttonPrimary.addEventListener("mouseover", () => {
    buttonSecondary.classList.add("shift-background");
  });

  buttonPrimary.addEventListener("mouseout", () => {
    buttonSecondary.classList.remove("shift-background");
  });
</script>
</html>