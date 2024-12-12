@extends('layouts.app')
{{-- @auth
@if (Auth::user()->role=="member") --}}
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  

  <title>CSR Program - Lembur Mangrove</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* General Styles */
body, html {
    margin: 0;
    padding: 0;
    min-height: 100%;
    display: flex;
    flex-direction: column;
  }

  /* Page Wrapper for sticky footer */
  .page-wrapper {
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  /* Header */
  .main-header {
    width: 100%;
    top: 0;
    background-color: #fcfce6;
    border-bottom: 1px solid #ddd;
  }

  .custom-navbar {
    padding: 10px 0;
  }

  .logo {
    height: 60px;
  }

  .navbar-nav .nav-link {
    font-size: 1rem;
    font-weight: 600;
    color: #000;
    margin: 0 15px;
    text-transform: uppercase;
  }

  .navbar-nav .nav-link:hover {
    color: #333;
    text-decoration: none;
  }

/* Research Section */
.research-section {
  padding: 60px 20px;
  background-color: cornsilk;
  margin-top: -48px;
  margin-bottom: -40px;
}

/* Header Background */
.header-background {
  background : url('{{ URL::to('/assets/images/research-header.jpg') }}') no-repeat center center/cover;
  background-size: cover;
  background-position: center;
  height: 250px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  border-radius: 10px;
}

.header-background .section-title {
  font-size: 2.5rem;
  font-weight: bold;
  color: white;
  margin-bottom: 10px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.header-background .section-subtitle {
  font-size: 1.2rem;
  color: white;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

/* Content Section */
.content h3 {
  font-size: 1.8rem;
  color: #4b644a;
  margin-bottom: 20px;
}

.content p {
  font-size: 1rem;
  line-height: 1.8;
  color: #333;
}

.content-image {
  background : url('{{ URL::to('/assets/images/research-image.jpg') }}') no-repeat center center/cover;
  background-size: cover;
  background-position: center;
  height: 300px;
  border-radius: 10px;
}

/* Call-to-Action Section */
.btn-contact {
  background-color: #f4a261;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-size: 1rem;
  font-weight: bold;
}

.btn-contact:hover {
  background-color: #e76f51;
  color: white;
}

a {
  color: #4b644a;
  text-decoration: underline;
}

    /* Footer */
    .footer {
        background-color: #4b634e;
        color: white;
        padding: 10px 0;
        text-align: center;
        margin-top: auto; /* Ensure footer stays at the bottom */
      }

      .footer-link {
        color: white;
        margin: 0 10px;
        text-decoration: none;
        font-size: 0.9rem;
      }

      .footer-link:hover {
        text-decoration: underline;
      }

</style>
</head>
<body>
    <section class="research-section">
        <div class="container">
          <!-- Header Section -->
          <div class="header">
            <div class="header-background">
              <h2 class="section-title">Research & Dedication</h2>
              <p class="section-subtitle">Penelitian & Pengabdian Masyarakat bagi Dunia Mangrove</p>
            </div>
          </div>

          <!-- Content Section -->
          <div class="content row mt-5">
            <!-- Left Text Content -->
            <div class="col-lg-7">
              <h3>Open to All Research & Dedication Initiatives!</h3>
              <p>
                Lembur Mangrove Patikang di Desa Citeureup adalah kawasan yang kaya akan potensi untuk kegiatan penelitian dan pengabdian masyarakat.
                Sebagai desa wisata berbasis konservasi dan pemberdayaan, kami membuka peluang kolaborasi dengan universitas dan institusi akademik
                untuk bersama-sama menciptakan dampak positif melalui ilmu pengetahuan dan aksi nyata.
              </p>
              <p>
                Lembur Mangrove percaya bahwa sinergi antara dunia akademik dan komunitas lokal dapat menjadi fondasi yang kuat untuk menciptakan
                perubahan berkelanjutan. Kami berkomitmen menyediakan fasilitas dan akses yang mendukung keberhasilan program penelitian dan
                pengabdian masyarakat.
              </p>
            </div>
            <!-- Right Image Content -->
            <div class="col-lg-5">
              <div class="content-image"></div>
            </div>
          </div>

          <!-- Call to Action Section -->
          <div class="cta-section text-center mt-5">
            <a href="https://wa.me/62817849463" class="btn btn-contact">
              Click Here to Chat Pak Deden at +62 817-849-463
            </a>
            <p class="mt-3">
              Email us at <a href="mailto:hello@lemburmangrove.com">hello@lemburmangrove.com</a>
            </p>
          </div>
        </div>
      </section>

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
{{-- @endif
@endauth --}}
