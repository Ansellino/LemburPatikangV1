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

/* CSR Section */
.csr-section {
  padding: 60px 20px;
  background-color: #f5f5f5;
}

/* Header Section */
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
  color: white;
  border-radius: 10px;
}

.header-background h2 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 10px;
}

.header-background p {
  font-size: 1.2rem;
}

/* Content Section */
.content-box {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.content-box h3 {
  font-size: 1.8rem;
  color: #4b644a;
  margin-bottom: 20px;
}

.content-box p {
  font-size: 1rem;
  line-height: 1.8;
  color: #333;
}

/* Initiatives */
.initiative-section {
  margin-top: 30px;
}

.initiative-box {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin: 10px;
}

.initiative-box i {
  font-size: 3rem;
  color: #4b644a;
  margin-bottom: 15px;
}

.initiative-box h4 {
  font-size: 1.2rem;
  color: #4b644a;
  margin-bottom: 10px;
}

.initiative-box p {
  font-size: 0.9rem;
  color: #555;
}

/* CTA Section Styling */
.cta-section {
  position: relative;
  padding: 60px 0;
  color: white;
  text-align: center;
}

.cta-background {
background : url('{{ URL::to('/assets/images/csr-header.jpg') }}') no-repeat center center/cover;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 60px 20px;
}

.cta-background h2 {
  font-size: 1.8rem;
  font-weight: bold;
  margin-bottom: 10px;
  background-color: rgba(255, 165, 0, 0.8); /* Orange background with opacity */
  display: inline-block;
  padding: 10px 20px;
  border-radius: 5px;
}

.cta-background p {
  font-size: 1.2rem;
  margin-top: 15px;
  background-color: rgba(255, 165, 0, 0.8);
  display: inline-block;
  padding: 10px 20px;
  border-radius: 5px;
}

.cta-background a {
  color: white;
  text-decoration: none;
}

.cta-background a:hover {
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
    <section class="csr-section">
        <div class="container">
          <!-- Header Section -->
          <div class="header-section text-center">
            <div class="header-background">
              <h2>CSR (Corporate Social Responsibility)</h2>
              <p>Initiatives in Collaboration – Lembur Mangrove Patikang</p>
            </div>
          </div>

          <!-- Content Section -->
          <div class="content-section mt-5">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="content-box">
                  <h3>Open to All CSR Initiatives!</h3>
                  <p>
                    Di Lembur Mangrove, kami percaya bahwa pelestarian lingkungan dan pemberdayaan masyarakat adalah tanggung jawab bersama.
                    Oleh karena itu, kami membuka peluang kolaborasi melalui program Corporate Social Responsibility (CSR) untuk mendukung
                    inisiatif yang berfokus pada keberlanjutan, pendidikan, dan pengembangan ekonomi lokal.
                  </p>
                  <p>
                    Melalui kemitraan CSR, perusahaan dan organisasi dapat berkontribusi dalam berbagai kegiatan, seperti:
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Initiative Section -->
          <div class="initiative-section row mt-4 text-center">
            <!-- Initiative 1 -->
            <div class="col-md-6 col-lg-3">
              <div class="initiative-box">
                <i class="icon icon-community"></i>
                <h4>Pemberdayaan Masyarakat</h4>
                <p>Pelatihan keterampilan, pendanaan usaha lokal, dan pengembangan produk berbasis mangrove.</p>
              </div>
            </div>
            <!-- Initiative 2 -->
            <div class="col-md-6 col-lg-3">
              <div class="initiative-box">
                <i class="icon icon-education"></i>
                <h4>Edukasi Lingkungan</h4>
                <p>Program edukasi bagi anak-anak dan masyarakat untuk meningkatkan kesadaran akan pentingnya pelestarian ekosistem.</p>
              </div>
            </div>
            <!-- Initiative 3 -->
            <div class="col-md-6 col-lg-3">
              <div class="initiative-box">
                <i class="icon icon-infrastructure"></i>
                <h4>Pengembangan Infrastruktur Desa</h4>
                <p>Dukungan untuk fasilitas umum yang meningkatkan kualitas hidup masyarakat sekitar.</p>
              </div>
            </div>
            <!-- Initiative 4 -->
            <div class="col-md-6 col-lg-3">
              <div class="initiative-box">
                <i class="icon icon-conservation"></i>
                <h4>Konservasi Mangrove</h4>
                <p>Penanaman mangrove untuk melindungi pesisir, meningkatkan kualitas lingkungan, dan mitigasi bencana tsunami.</p>
              </div>
            </div>
          </div>

          <section class="cta-section">
            <div class="cta-background">
              <div class="container text-center">
                <h2>Click Here to Chat Pak Deden on +62 817-849-463</h2>
                <p>Email Us at <a href="mailto:hello@lemburmangrove.com">hello@lemburmangrove.com</a></p>
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
