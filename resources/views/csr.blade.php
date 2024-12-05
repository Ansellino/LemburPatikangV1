@extends('layouts.app')
{{-- @auth
@if (Auth::user()->role=="member") --}}
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>CSR Program - Lembur Mangrove</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
  padding: 40px 1px;
  padding-bottom: 100px;
  background: url("../assets/images/research-header.jpg")no-repeat center center/cover;
  margin-top: -3rem;
}

.csr-section2 {
  padding: 900px 20px;
  margin-bottom: -22%;
  background-color: #FEFAE0;
}

/* Header Section */
.header-background {
  background : url('public/assets/images/frame-44.png') no-repeat center center/cover;
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
  padding: 45px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin-top: -55rem;
}

.mt5{
  margin-top: -22rem;
}

.content-box h3 {
  font-size: 1.8rem;
  color: #4b644a;
  margin-bottom: 20px;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 4rem;
  font-weight: bold;
}

.content-box p {
  font-size: 1.2rem;
  line-height: 1.8;
  color: #333;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-weight: bold;
}

/* Initiatives */
.initiative-section {
  margin-top: 30px;
}

.initiative-box1 {
  width: 870px;
  color: rgba(198,104,40,1);
  position: absolute;
  top: -500px;
  left: 370px;
  font-family: Poppins;
  font-weight: ExtraBold;
  opacity: 1;
  text-align: left;
  font-size: 26px;
}

.initiative-box1 i {
  font-size: 90px !important;
}

.initiative-box1 h4 {
  font-size: 50px !important;
  font-weight: bolder;
}

.initiative-box2 {
  width: 905px;
  color: rgba(94,113,83,1);
  position: absolute;
  top: -290px;
  left: 150px;
  font-family: Poppins;
  font-weight: ExtraBold;
  opacity: 1;
  text-align: right;
  font-size: 26px;
}

.initiative-box2 i {
  font-size: 90px !important;
}

.initiative-box2 h4 {
  font-size: 50px !important;
  font-weight: bolder;
}

.initiative-box3 {
  width: 881px;
  color: rgba(198,104,40,1);
  position: absolute;
  top: -70px;
  left: -560px;
  font-family: Poppins;
  font-weight: ExtraBold;
  opacity: 1;
  text-align: left;
  font-size: 26px;
}

.initiative-box3 i {
  font-size: 90px !important;
}

.initiative-box3 h4 {
  font-size: 50px !important;
  margin-right: -9%;
  font-weight: bolder;
}

.initiative-box4 {
  width: 898px;
  color: rgba(94,113,83,1);
  position: absolute;
  top: 150px;
  left: -797px;
  font-family: Poppins;
  font-weight: ExtraBold;
  opacity: 1;
  text-align: right;
  font-size: 26px;
}

.initiative-box4 i {
  font-size: 90px !important;
}

.initiative-box4 h4 {
  font-size: 50px !important;
  font-weight: bolder;
}

/* CTA Section Styling */
.cta-section {
  position: relative;
  padding: 0px 0;
  color: white;
  text-align: center;
  margin-bottom: -30px;
  margin-top:-30px;
}

.cta-background {
  background : url("../assets/images/frame-44.png") no-repeat center center/cover;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 91px 20px;
}

.cta-background h2 {
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 10px;
  background-color: #a65325;
  display: inline-block;
  padding: 13px 19px;
  border-radius: 15px;
}

.cta-background p {
  font-size: 1.2rem;
  margin-top: 15px;
  background-color: #a65325;
  display: inline-block;
  padding: 10px 20px;
  border-radius: 15px;
}

.cta-background a {
  color: white;
  text-decoration: none;
}

.cta-background a:hover {
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
    </section>


          <section class="csr-section2">
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
              <div class="initiative-box1">
                <h4><i class="bi bi-people-fill"></i>Pemberdayaan Masyarakat</h4>
                <p>Pelatihan keterampilan, pendanaan usaha lokal, dan pengembangan produk berbasis mangrove.</p>
              </div>
            </div>
            <!-- Initiative 2 -->
            <div class="col-md-6 col-lg-3">
              <div class="initiative-box2">
                <h4></i>Edukasi Lingkungan<i class="bi bi-globe-americas"></i></h4>
                <p>Program edukasi bagi anak-anak dan masyarakat untuk meningkatkan kesadaran akan pentingnya pelestarian ekosistem.</p>
              </div>
            </div>
            <!-- Initiative 3 -->
            <div class="col-md-6 col-lg-3">
              <div class="initiative-box3">
                <h4><i class="bi bi-house-fill"></i>Pengembangan Infrastruktur Desa</h4>
                <p>Dukungan untuk fasilitas umum yang meningkatkan kualitas hidup masyarakat sekitar.</p>
              </div>
            </div>
            <!-- Initiative 4 -->
            <div class="col-md-6 col-lg-3">
              <div class="initiative-box4">
                <h4>Konservasi Mangrove<i class="bi bi-tree-fill"></i></h4>
                <p>Penanaman mangrove untuk melindungi pesisir, meningkatkan kualitas lingkungan, dan mitigasi bencana tsunami.</p>
              </div>
            </div>
          </div>
      </section>

          <section class="cta-section">
            <div class="cta-background">
              <div class="container text-center" style="padding-bottom:10px;">
                <h2>Click Here to Chat Pak Deden on +62 817-849-463</h2>
              </div>
              <div class="cta-background2">
                <h2>Email Us at <a href="mailto:hello@lemburmangrove.com">hello@lemburmangrove.com</a></h2>
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
