<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Makan Bunda Emi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      section {
        margin-top: 50px;
        margin-bottom: 50px;
      }
  
      .navbar a.nav-link {
        color: white;
      }
  
      .carousel-item img {
        height: 675px; /* Ganti dengan tinggi yang Anda inginkan */
        object-fit: cover; /* Untuk menjaga aspek gambar */
      }
  
      .carousel-caption {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100%; /* Pastikan tinggi sesuai dengan kebutuhan Anda */
      }
    </style>

  </head>

  <body>
    <!--Navbar-->
    <header
      class="navbar navbar-expand-lg sticky-top"
      style="background-color: rgba(255, 0, 0, 0.77)"
    >
      <nav class="navbar navbar-expand-lg bg-body-teritery">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">RMBE</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('catering') }}">Box Catering</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!--Home-->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ url('assets/gambar/pertama.jpg') }}" class="d-block w-100" alt="Slide 1" />
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Selamat Datang.</h1>
              <p class="opacity-75">Selamat Datang Dirumah Makan Bunda Emi.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ url('assets/gambar/kedua.jpg') }}" class="d-block w-100" alt="Slide 2" />
          <div class="container">
            <div class="carousel-caption">
              <h1>Selamat Menikmati.</h1>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ url('assets/gambar/ketiga.jpg') }}" class="d-block w-100" alt="Slide 3" />
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Terima Kasih.</h1>
              <p>Terimakasih Telah Berkunjung Dirumah Makan Bunda Emi.</p>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--About-->
    <section class="about" id="about">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="{{ url('assets/gambar/about.jpg') }}"
              class="d-block mx-lg-auto img-fluid"
              alt="Bootstrap Themes"
              width="700"
              height="500"
              loading="lazy"
            />
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
              Rumah Makan Bunda Emi
            </h1>
            <p class="lead">
            Rumah Makan Bunda Emi Padang menyajikan hidangan khas Padang dengan cita 
            rasa autentik dan kehangatan ala rumah. Berdiri sejak 2015, kami telah menjadi bagian dari 
            kuliner dengan menyuguhkan hidangan lezat yang disiapkan dengan cinta dan dedikasi oleh kami. 
            Terima kasih telah memilih kami sebagai destinasi kuliner Anda, kami berharap dapat menjadi 
            bagian dari kenangan indah dalam setiap santap bersama keluarga dan teman. Selamat menikmati hidangan lezat kami!
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start"></div>
          </div>
        </div>
      </div>
    </section>
    <!--About-->

    <!-- Menu -->
    <section class="menu" id="menu">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-6 mb-3">
            <!-- Tambahkan class mb-3 di sini -->
            <div class="menu-item">
              <img
                src="{{ url('assets/gambar/menu.png') }}"
                alt="Menu Item 1"
                style="width: 200px; margin-bottom: 10px"
              />
              <h3 style="margin-bottom: 10px">Menu</h3>
              <a href="{{ route('menu') }}" class="btn btn-danger">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <!-- Tambahkan class mb-3 di sini -->
            <div class="box-item">
              <img
                src="{{ url('assets/gambar/catering1.png') }}"
                alt="Menu Item 2"
                style="width: 200px; margin-bottom: 10px"
              />
              <h3 style="margin-bottom: 10px">Box Catering</h3>
              <a href="{{ route('catering') }}" class="btn btn-danger"
                >Pesan Sekarang</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Contact-->
    <section class="contact" id="contact">
      <div class="container">
        <footer class="row row-cols-1 row-cols-md-2 py-5 my-5 border-top">
          <div class="col mb-6">
            <a
              href="/"
              class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none"
            >
            </a>
            <p class="text-body-secondary">Rumah Makan Bunda Emi, 2015.</p>
            <!-- Tambahkan alamat di bawah ini -->
            <p class="text-body-secondary">
              Alamat: Jalan Sosial No.26/RT.08 RW.002,11460
            </p>
          </div>
          <div class="col mb-6 text-end">
            <h5>Hubungi Kami:</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-body-secondary"
                  >WhatsApp: +6281387288781</a
                >
              </li>
              <li class="nav-item mb-2">
                <a
                  href="mailto:email@contoh.com"
                  class="nav-link p-0 text-body-secondary"
                  >Email: emiwatisofyan@gmail.com</a
                >
              </li>
            </ul>
          </div>
        </footer>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
