<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deep Dive Deluxe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link  rel="stylesheet" href="dashboard.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="dashboard.html"><span class="text-warning">D3</span>Deep Dive Deluxe</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang D3
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="d3.html">D3</a></li>
                  <li><a class="dropdown-item" href="logo&arti.html">Logo dan Arti</a></li>
                  <li><a class="dropdown-item" href="tugas&fungsi">Tugas dan Fungsi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Publikasi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="artikel.html">Artikel</a></li>
                  <li><a class="dropdown-item" href="infografis.html">Infografis</a></li>
                  <li><a class="dropdown-item" href="majalah.html">Majalah</a></li>
                  <li><a class="dropdown-item" href="materi.html">Materi</a></li>
                  <li><a class="dropdown-item" href="identifikasi.html">Identifikasi Ikan Karang</a></li>
                  <li><a class="dropdown-item" href="species.html">Species Ikan Karang</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="peta.html">Peta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chatbot.html">ChatD3</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Anggota</a></li>
                  <li><a class="dropdown-item" href="#">Kontak</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="foto/home-1.jpg" class="d-block w-100" alt="home1">
                <div class="carousel-caption">
                    <h5>Judul Gambar 1</h5>
                    <p>Deskripsi singkat gambar 1.</p>
                    <p><a href="#" class="btn btn-warning" mt-3>Pelajari Lebih Lanjut</a></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="foto/home-2.jpg" class="d-block w-100" alt="home2">
                <div class="carousel-caption">
                    <h5>Judul Gambar 2</h5>
                    <p>Deskripsi singkat gambar 2.</p>
                    <p><a href="#" class="btn btn-warning" mt-3>Pelajari Lebih Lanjut</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="foto/home-3.jpg" class="d-block w-100" alt="home3">
                <div class="carousel-caption">
                    <h5>Judul Gambar 3</h5>
                    <p>Deskripsi singkat gambar 3.</p>
                    <p><a href="#" class="btn btn-warning" mt-3>Pelajari Lebih Lanjut</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="about" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <img src="foto/2.jpg" alt="2" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
                <h2>Berita Terkini<br> Ikan Karang</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem ullam aliquam consequuntur magni sunt eius. Aut perferendis non, itaque asperiores a quaerat accusantium vitae, dolor est velit rem deserunt? Ad.</p>
                <a href="#" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
        </div>
    </section>
    
    <section id="tentang" class="tentang section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Tentang</h2>
                        <p>Lorem ipsum dolor sit amet<br>consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb2">
                        <div class="card-body">
                            <i class="bi bi-stack"></i>
                            <h3 class="card-title">D3</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates quia ipsa, placeat vitae neque soluta expedita magni, omnis repellat a alias quisquam voluptatibus sequi blanditiis deserunt et maiores voluptate dolorum!</p>
                            <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb2">
                        <div class="card-body">
                            <i class="bi bi-slack"></i>
                            <h3 class="card-title">Logo dan Arti</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates quia ipsa, placeat vitae neque soluta expedita magni, omnis repellat a alias quisquam voluptatibus sequi blanditiis deserunt et maiores voluptate dolorum!</p>
                            <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb2">
                        <div class="card-body">
                            <i class="bi bi-gear-fill"></i>
                            <h3 class="card-title">Tugas dan Fungsi</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates quia ipsa, placeat vitae neque soluta expedita magni, omnis repellat a alias quisquam voluptatibus sequi blanditiis deserunt et maiores voluptate dolorum!</p>
                            <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="publikasi" class="publikasi section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Publikasi Terkini</h2>
                        <p>Lorem ipsum dolor sit amet<br>consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="3.jpg" alt="3" class="img-fluid">
                            </div>
                            <h3 class="card-tittle">Artikel</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, soluta rem. Minima consequuntur, delectus corrupti laborum modi molestias quia ab?</p>
                            <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="4.jpg" alt="4" class="img-fluid">
                            </div>
                            <h3 class="card-tittle">Majalah</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, soluta rem. Minima consequuntur, delectus corrupti laborum modi molestias quia ab?</p>
                            <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="5.jpg" alt="5" class="img-fluid">
                            </div>
                            <h3 class="card-tittle">Infografis</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, soluta rem. Minima consequuntur, delectus corrupti laborum modi molestias quia ab?</p>
                            <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Monitoring" class="monitoring section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Monitoring Ikan karang</h2>
                        <p>Lorem ipsum dolor sit amet<br>consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="5.jpg" alt="5" class="img-fluid">
                        </div>
                        <h3 class="card-tittle">Materi</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, soluta rem. Minima consequuntur, delectus corrupti laborum modi molestias quia ab?</p>
                        <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="5.jpg" alt="5" class="img-fluid">
                        </div>
                        <h3 class="card-tittle">Identifikasi Ikan Karang</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, soluta rem. Minima consequuntur, delectus corrupti laborum modi molestias quia ab?</p>
                        <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="5.jpg" alt="5" class="img-fluid">
                        </div>
                        <h3 class="card-tittle">Species Ikan Karang</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, soluta rem. Minima consequuntur, delectus corrupti laborum modi molestias quia ab?</p>
                        <button class="btn btn-warning text-dark">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Right Reserved @deepdivedeluxe @projectASIK2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>