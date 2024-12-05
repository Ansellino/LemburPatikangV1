@extends('layouts.app')
{{-- @auth
@if (Auth::user()->role=="member") --}}
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  

  <title>About Us - Lembur Mangrove</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      min-height: 100%;
      display: flex;
      flex-direction: column;
      background-image: none;
    }

    .page-wrapper {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

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

    .about-banner {
      background: url('{{ URL::to('/assets/images/About-Us.jpg') }}') no-repeat center center/cover;
      height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      margin-top:-40px;
    }

    .banner-content h1 {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .banner-content p {
      font-size: 1.2rem;
    }

    .about-content {
      background-color: white;
      color: black;
      padding: 60px 20px;
    }

    .about-content p {
      margin-bottom: 15px;
      line-height: 1.8;
      font-size: 1.1rem;
    }

    .about-content {
      padding: 40px 0;
    }

    .about-content h2 {
      font-size: 1.8rem;
      font-weight: bold;
      margin-bottom: 15px;
      color: #333;
    }

    .about-content p {
      margin-bottom: 15px;
      line-height: 1.8;
      font-size: 1.1rem;
      color: #333;
    }

    .info-box {
      background-color: #4b634e;
      color: white;
      padding: 20px;
      border-radius: 8px;
    }

    .info-box h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .info-box ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .info-box ul li {
      margin-bottom: 10px;
      font-size: 1rem;
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    .shadow {
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
    }

    .rounded {
      border-radius: 8px;
    }

    .vision-journey-section {
      background-color: #d97735;
      color: white;
      padding: 60px 20px;
    }

    .vision-journey-section h2 {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .vision-journey-section p {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 15px;
    }

    .offer-section {
      background-color: #A9B388;
      padding: 60px 20px;
      color: #333;
      margin-bottom:-30px;
    }

    .offer-card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      transition: transform 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .offer-card:hover {
      transform: translateY(-10px);
    }

    .offer-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    .row .col-lg-4 {
      display: flex;
    }

    .offer-card h3 {
      font-size: 1.5rem;
      font-weight: bold;
      color: #a65325;
      margin-bottom: 10px;
    }

    .offer-card p {
      font-size: 1rem;
      line-height: 1.6;
      color: #555;
      flex-grow: 1;
    }
    </style>
</head>

<body>

  <section class="about-banner">
    <div class="banner-content text-center">
      <h1>About Us</h1>
      <p>Tentang Kami - Lembur Mangrove Patikang</p>
    </div>
  </section>

  <section class="about-content container" >
    <div class="row">
      <div class="col-lg-6" style="margin-top: min(50px);">
        <h1>Selamat Datang di Lembur Mangrove</h1>
        <p>
          Selamat datang di Lembur Mangrove, sebuah desa wisata yang terletak di Kampung Patikang, Desa Citeureup,
          Panimbang, Pandeglang, Banten.
        </p>
        <p>
          Dikelilingi oleh hutan mangrove yang asri dan pesona alam pantai, kami komunitas yang menggabungkan
          pelestarian
          lingkungan dengan kearifan lokal.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="info-box" style="color:#FEFAE0; padding:50px;">
          <h3>Jam Operasional</h3>
          <ul style="list-style-type: disc; padding:20px;">
            <li><b>Senin – Kamis:</b> 08.00 – 17.00</li>
            <li><b>Sabtu – Minggu:</b> 08.00 – 17.00</li>
            <li><b>Jumat:</b> Tutup</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-6">
        <img src="{{ URL::to('/assets/images/Mangrove-Activity.jpg') }}" alt="Mangrove Activity"
          class="img-fluid rounded shadow" style="width: 100%; height: auto;">
      </div>
      <div class="col-lg-6" style=" margin-top: min(50px);">
        <h1>Who Are We?</h1>
        <p>
          Kami adalah komunitas petani, nelayan, dan pengrajin yang berdedikasi untuk melestarikan ekosistem mangrove
          sekaligus mengenalkan Lembur Mangrove pada dunia.
        </p>
        <p>
          Melalui dukungan inisiatif dari Pokdarwis Putri Gundul, kami mengembangkan kawasan mangrove ini menjadi
          destinasi edukasi dan wisata alam yang unik.
        </p>
      </div>
    </div>
  </section>

  <section class="vision-journey-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-left">
          <h2>Our Vision</h2>
          <p>
            Menginspirasi kepedulian terhadap lingkungan dan pariwisata berkelanjutan melalui pelestarian mangrove yang
            dipadukan dengan pengalaman budaya yang autentik.
            Kami bercita-cita menjadi desa wisata unggulan yang menghubungkan manusia dengan keindahan dan pentingnya
            mangrove.
          </p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 text-left">
          <h2>Our Journey</h2>
          <p>
            Berawal dari sebuah kawasan rawa yang menjadi tempat tinggal masyarakat lokal, Lembur Mangrove kini telah
            berkembang menjadi desa wisata yang memadukan konservasi dengan pemberdayaan ekonomi.
            Sejak 2017, berkat inisiatif Pokdarwis Putri Gundul, kami mengubah potensi sumber daya alam kami menjadi
            pengalaman wisata yang mengedukasi dan menghibur.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="offer-section">
    <div class="container text-center">
        <b><h1>What We Offer?</h1></b>

        <div class="row mt-4">
            @foreach ($post as $post)
                @if ($post->category_id == 4)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="offer-card">
                            <img src="{{ URL::to('/assets/images/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded">
                            <h3><a href="/post/{{$post->id}}" style="color: black;">{{ $post->title }}</a></h3>
                            <p>
                                {{ \Illuminate\Support\Str::limit($post->description, 30) }}
                                @if (strlen($post->description) > 30)
                                    <a href="/post/{{ $post->id }}">Read More</a>
                                @endif
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection
{{-- @endif
@endauth --}}
