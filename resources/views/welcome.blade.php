@extends('layouts.app')

{{-- @auth
@if (Auth::user()->role=="member")   --}}
@section('content')
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembur  
   Mangrove</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      /* General Styles */
      body,
      html {
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

      /* Auth Buttons in Hero Section */
      .auth-buttons {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        gap: 10px;
      }

      .auth-buttons .btn-login,
      .auth-buttons .btn-signup {
        padding: 8px 15px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
        text-transform: uppercase;
        text-decoration: none;
      }

      .auth-buttons .btn-login {
        background-color: #a65325;
        /* Oranye kecokelatan */
        color: white;
        border: none;
      }

      .auth-buttons .btn-login:hover {
        background-color: #883e1a;
        /* Warna hover lebih gelap */
      }

      .auth-buttons .btn-signup {
        background-color: #a65325;
        /* Tombol putih */
        color: white;
        /* Teks oranye kecokelatan */
        border: 2px solid #a65325;
      }

      .auth-buttons .btn-signup:hover {
        background-color: #883e1a;
        color: white;
      }

      /* Hero Section */
      .hero-section {
        background: url('images/mangrove-background.jpg') no-repeat center center/cover;
        height: 100vh;
        /* Full screen height */
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
      }

      .hero-overlay {
        background-color: rgba(0, 0, 0, 0.5);
        /* Semi-transparent overlay */
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
      }

      .hero-section h1 {
        font-size: 3rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 10px;
      }

      .subtitle {
        font-size: 1.5rem;
        margin-bottom: 20px;
      }

      .btn-primary {
        background-color: #a65325;
        color: white;
        padding: 10px 20px;
        text-transform: uppercase;
        border: none;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
      }

      .btn-primary:hover {
        background-color: #883e1a;
        text-decoration: none;
      }

      .social-icons {
        display: flex;
        justify-content: center;
        gap: 20px;
      }

      .social-icon {
        color: #f4f6f3;
        font-size: 1.5rem;
        transition: color 0.3s ease;
      }

      .social-icon:hover {
        color: #a65325;
      }

      /* Visitor Indicator Section */
      .visitor-indicator-section {
        background: url('images/mangrove-indicator.jpg') no-repeat center center/cover;
        padding: 60px 20px;
        color: white;
      }

      .section-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #fcfce6;
        margin-bottom: 20px;
      }

      .indicator-item {
        background-color: rgba(0, 0, 0, 0.6);
        /* Semi-transparan hitam */
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
      }

      .indicator-item p {
        font-size: 1.2rem;
        line-height: 1.8;
        margin-bottom: 15px;
      }

      .indicator-item h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 10px;
      }

      .indicator-item .source {
        font-size: 1rem;
        font-style: italic;
        color: #ddd;
      }

      /* Locals Grow Section */
      .locals-grow-section {
        background-color: #d7dfd0;
        /* Warna hijau pucat */
        padding: 60px 20px;
        color: #333;
      }

      .locals-grow-section .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
      }

      .locals-grow-section .section-subtitle {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 30px;
      }

      .locals-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease;
      }

      .locals-card:hover {
        transform: translateY(-10px);
      }

      .locals-card img {
        max-width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
      }

      .locals-card h3 {
        font-size: 1.5rem;
        color: #a65325;
        /* Warna oranye kecokelatan */
        margin-bottom: 10px;
      }

      .locals-card p {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
      }

      /* Collaboration Section */
      .collaboration-section {
        background: url('images/mangrove-background.jpg') no-repeat center center/cover;
        height: 300px;
        /* Adjust the height based on your design */
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
      }

      .collaboration-overlay {
        background-color: rgba(0, 0, 0, 0.5);
        /* Semi-transparent black overlay */
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .collaboration-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
        margin: 0;
      }

      /* Partners Section */
      .partners-section {
        background-color: #edf2e5;
        /* Light green background */
        padding: 40px 20px;
      }

      .partner-logo {
        max-width: 100%;
        height: auto;
        margin: 0 auto;
        display: block;
        padding: 10px;
      }

      .contact-message {
        margin-top: 20px;
        font-size: 1.1rem;
        color: #a65325;
        font-weight: bold;
      }

      .contact-message a {
        color: white;
        background-color: #a65325;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
      }

      .contact-message a:hover {
        background-color: #883e1a;
      }

      /* Blogs & News Section */
      .blogs-news-section {
        background-color: #d7dfd0;
        /* Light green background */
        padding: 60px 20px;
        color: #333;
      }

      .blogs-news-section .section-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 30px;
        color: #333;
      }

      .blog-card,
      .news-card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        text-align: left;
        transition: transform 0.3s ease;
      }

      .blog-card:hover,
      .news-card:hover {
        transform: translateY(-10px);
      }

      .blog-card img,
      .news-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
      }

      .blog-card h3,
      .news-card h3 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #a65325;
        /* Brownish-orange for titles */
        margin-bottom: 10px;
      }

      .blog-card p,
      .news-card p {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
      }

      /* About and Contact Section */
      .about-contact-section {
        background: url('images/mangrove-background.jpg') no-repeat center center/cover;
        padding: 60px 20px;
        color: white;
      }

      .about-box {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
      }

      .about-box h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .about-box p {
        font-size: 1rem;
        margin-bottom: 15px;
      }

      .about-box i {
        margin-right: 10px;
        color: #f4a261;
        /* Icon color */
      }

      .contact-box {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
      }

      .contact-box h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .form-group {
        margin-bottom: 15px;
      }

      .form-control {
        background: rgba(255, 255, 255, 0.9);
        border: none;
        padding: 10px;
        font-size: 1rem;
        border-radius: 5px;
        width: 100%;
      }

      .form-control:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(255, 165, 0, 0.8);
      }

      .btn-primary {
        background-color: #f4a261;
        color: white;
        padding: 10px 20px;
        font-size: 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #e76f51;
      }

/* Procedure Section */
.procedure-section {
background-color: #edf2e5; /* Light green background */
padding: 50px 20px;
}

.procedure-box {
  background-color: white;
  border-radius: 10px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  padding: 30px;
}

.procedure-box h2 {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 20px;
  color: #4b644a;
}

.procedure-list {
  list-style-type: decimal;
  padding-left: 20px;
  line-height: 1.8;
  color: #333;
}

.procedure-list li {
  margin-bottom: 15px;
}

.procedure-list b {
  color: #4b644a; /* Highlighted text */
}

.procedure-list ul {
  list-style-type: disc;
  margin-top: 10px;
  padding-left: 20px;
}

.procedure-list ul li {
  margin-bottom: 5px;
}

      /* Footer */
      .footer {
        background-color: #4b634e;
        color: white;
        padding: 10px 0;
        text-align: center;
        margin-top: auto;
        /* Ensure footer stays at the bottom */
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

    <section class="hero-section">
        <div class="hero-overlay">
            <div class="container text-center text-white">
                <h1>Welcome To Patikang</h1>
                <p class="subtitle">Lembur Mangrove, Desa Wisata Citeureup</p>
                <a href="#" class="btn btn-primary">Look Out!</a>
                <div class="social-icons mt-4">
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="visitor-indicator-section">
        <div class="container">
            <h2 class="section-title">Indikator Pengunjung</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="indicator-item">
                        <p>Indonesia memiliki salah satu wilayah hutan mangrove terluas di dunia di Banten dengan luas hingga</p>
                        <h1>4.081,17 hektar</h1>
                        <p class="source">(Sumber, 2024)</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="indicator-item">
                        <p>Indonesia memiliki salah satu wilayah hutan mangrove terluas di dunia di Banten dengan luas hingga</p>
                        <h1>4.081,17 hektar</h1>
                        <p class="source">(Sumber, 2024)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="locals-grow-section">
        <div class="container text-center">
            <h2 class="section-title">Let’s Help The Locals Grow</h2>
            <p class="section-subtitle">
                Waktu terbaik menanam pohon adalah 20 tahun yang lalu dan waktu terbaik kedua adalah sekarang.
            </p>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="locals-card">
                        <img src="{{ URL::to('/assets/images/tour-packages.jpg') }}" alt="Tour Packages" class="img-fluid rounded">
                        <h3>Tour Packages</h3>
                        <p>
                            Paket Wisata lembur mangrove yang dengan konsep wisata edukasi, ekologi yang berkelanjutan bagi sosial ekonomi dan lingkungan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="locals-card">
                        <img src="{{ URL::to('/assets/images/mangrove-products.jpg') }}" alt="Mangrove Products" class="img-fluid rounded">
                        <h3>Mangrove Products</h3>
                        <p>
                            Program CSR perusahaan dalam perlindungan lingkungan di pesisir yang dapat meningkatkan daya beli masyarakat sekitar.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="locals-card">
                        <img src="{{ URL::to('/assets/images/csr-programs.jpg') }}" alt="CSR Programs" class="img-fluid rounded">
                        <h3>CSR Programs</h3>
                        <p>
                            Membeli produk yang dihasilkan dari tanaman mangrove selain kayu dapat meningkatkan ekonomi masyarakat lokal.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="locals-card">
                        <img src="{{ URL::to('/assets/images/research-dedication.jpg') }}" alt="Research and Dedication" class="img-fluid rounded">
                        <h3>Research and Dedication</h3>
                        <p>
                            Penelitian dan pengabdian akademisi sangat dibutuhkan dalam keberlangsungan kehidupan masyarakat sekitar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="procedure-section">
        <div class="container">
          <div class="procedure-box">
            <h2>Prosedur Pendaftaran & Pembayaran</h2>
            <ol class="procedure-list">
              <li>
                <b>Pilih Paket atau Produk.</b> Silakan pilih paket tour atau produk yang Anda inginkan.
              </li>
              <li>
                <b>Hubungi WhatsApp untuk Pembayaran.</b> Untuk melanjutkan pembayaran, hubungi kami melalui nomor WhatsApp berikut: <b>0817849463 (Deden)</b>.
              </li>
              <li>
                Ketika menghubungi nomor WhatsApp tersebut, harap sertakan format berikut:
                <ul>
                  <li><b>Nama:</b></li>
                  <li><b>Paket/Produk yang diinginkan:</b></li>
                </ul>
              </li>
              <li>
                <b>Pembayaran Melalui QRIS.</b> Setelah konfirmasi, Anda akan menerima QRIS yang dapat digunakan untuk melakukan pembayaran sesuai dengan harga paket atau produk yang Anda pilih.
              </li>
            </ol>
          </div>
        </div>
      </section>

    <section class="collaboration-section">
        <div class="collaboration-overlay">
            <div class="container text-center">
                <h2 class="collaboration-title">Our progress is the result of collaboration</h2>
            </div>
        </div>
    </section>

    <section class="partners-section">
        <div class="container text-center">
            <div class="row justify-content-center align-items-center mb-4">
                <div class="col-lg-2 col-md-3 col-4">
                    <img src="images/exciting-banten-logo.png" alt="Exciting Banten" class="partner-logo">
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <img src="images/chandra-asri-logo.png" alt="Chandra Asri" class="partner-logo">
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <img src="images/pokdarwis-pandeglang-logo.png" alt="Pokdarwis Pandeglang" class="partner-logo">
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <img src="images/tourism-logo.png" alt="Tourism Logo" class="partner-logo">
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <img src="images/kia-logo.png" alt="KIA Logo" class="partner-logo">
                </div>
            </div>
            <div class="contact-message">
                <p>Kindly contact us for collaboration at <a href="mailto:agskjags@gmail.com">agskjags@gmail.com</a></p>
            </div>
        </div>
    </section>

    <section class="blogs-news-section">
        <div class="container">
            <h2 class="section-title text-center">Our Latest Blogs & News</h2>
            <div class="row mt-4">
                @foreach ($post as $post)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-card">
                            <img src="{{ URL::to('/assets/images/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded">

                            <h3><a href="/post/{{$post->id}}" style="color: black;">{{ $post->title }}</a></h3>
                            <p>
                                {{ \Illuminate\Support\Str::limit($post->description, 100) }}
                                @if (strlen($post->description) > 100)
                                    ... <a href="/post/{{$post->id}}">Read More</a>
                                @endif
                            </p>
                            <p><i>Category: </i><a href="/category/{{$post->category->id}}">{{$post->category->name}}</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about-box text-white">
                        <h2>about us</h2>
                        <p>
                            <i class="fas fa-map-marker-alt"></i> Kampung Patikang, Desa Citeureup, Panimbang, Pandeglang, Banten, Indonesia
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i> Deden: +62 817-849-463<br>Mon – Fri, 8:00-22:00
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-box">
                        <h2>hubungi kami</h2>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Insert Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <select name="country" class="form-control" required>
                                    <option value="">Select Your Country</option>
                                    <option value="indonesia">Indonesia</option>
                                    <option value="malaysia">Malaysia</option>
                                    <option value="singapore">Singapore</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message" class="form-control" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
{{-- @endif
@endauth --}}
