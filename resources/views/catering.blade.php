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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
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
    .catering-container {
      display: flex;
      justify-content: flex-end;
    }
  </style>

  <body>
    <!--Navbar-->
    <header
      class="navbar navbar-expand-lg sticky-top"
      style="background-color: rgba(255, 0, 0, 0.77)"
    >
      <nav class="navbar navbar-expand-lg bg-body-teritery">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="/index.html">RMBE</a>
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

    <!--Catering-->
    <section class="catering-packages" id="catering-packages">
      <div class="container text-center">
        <div class="row justify-content-center">
          <!-- Package 1 -->
@foreach($pakets as $paket)          
          <div class="col-md-4">
            <div class="catering-package-item border p-3 mb-4">
              <h3>{{ $paket->name }}</h3>
              <h3>Rp {{ number_format($paket->price) }}/Box</h3>
              <div class="catering-options">
                <ul>
@foreach(explode('-',$paket->detail) as $key => $detail)
@php if($key === 0){ continue; } @endphp
                  <li>{{ $detail }}</li>
@endforeach
                </ul>
              </div>
              <a href="https://wa.me/+6281387288781" class="btn btn-danger">
                <i class="fab fa-whatsapp"></i> Pesan Paket
              </a>
            </div>
          </div>
@endforeach          
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
              Alamat: Jalan Sosial No.26 RT.08/RW.002,11460
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
                  >Email: ematisofyan@gmail.com</a
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
