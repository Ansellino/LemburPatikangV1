@extends('layouts.app')

{{-- @auth
@if (Auth::user()->role=="member")  --}}
@section('content')

@if($post->category_id == 1)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>

.product-detail {
    background-color: none;
}

.product-detail h1 {
    font-size: 2.5rem;
    color: #4b644a;
}

.product-detail p {
    font-size: 1.1rem;
    color: #555;
}

.title-product-service {
  background: url('{{ URL::to('/assets/images/lembur-mangrove-products.jpg') }}') no-repeat center center/cover;
  text-align: center; /* Center the text */
  padding: 100px 20px; /* Add some padding for better readability */
}

.title-product-service h1,
.title-product-service h2 {
  color: white;
  -webkit-text-stroke: 1px black;
  text-stroke: 1px white;
  font-family: 'Arial Black', sans-serif; /* Choose a bold font */
}

.title-product-service h1 {
  font-size: 3em; /* Make the main heading larger */
  margin-bottom: 0.5em; /* Add space between headings */
}

.title-product-service h2 {
  font-size: 2em;
}

.product-detail .breadcrumb {
    background: none;
    padding: 0;
    margin-bottom: 20px;
}

.product-detail .breadcrumb-item a {
    text-decoration: none;
    color: #4b644a;
}

.product-detail .breadcrumb-item.active {
    color: #6c757d;
}

.card {
    background-color: none;
            border-radius: 10px;
            margin: 20px auto;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card img {
    max-height: 300px;
    object-fit: cover;
    border-radius: 10px;
}

.btn-success {
    background-color: #4CAF50;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1rem;
}

.btn-success:hover {
    background-color: #45a049;
}


    </style>
</head>
<body>

    <section class="product-detail">
        <div class="container py-5">
            <!-- Header -->
            <div class="text-center mb-4">
                <div class="title-product-service">
                <h1 class="fw-bold">Our Products and Services</h1>
                <h2 class="fw-bold" >Membeli berarti membantu kami selamatkan bumi.</h2>
                </div>
            </div>

            <!-- Product Detail Card -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm p-4">
                        <nav class="breadcrumb mb-4">
                            <a class="breadcrumb-item" href="{{ url('/') }}">Beranda</a>
                            <a class="breadcrumb-item" href="{{ url()->previous() }}">Products</a>
                            <span class="breadcrumb-item active">{{$post->title}}</span>
                        </nav>
                        <div class="row">
                            <!-- Product Image -->
                            <div class="col-lg-6 text-center">
                                <img src="{{ URL::to('/assets/images/'.$post->image) }}" class="img-fluid rounded" alt="Fresh Mangrove Syrup">
                            </div>

                            <!-- Product Info -->
                            <div class="col-lg-6">
                                <h2 class="fw-bold">{{$post->title}}</h2>
                                <p>{{$post->penjelasan}}</p>
                                <h4 class="text-success fw-bold">Rp.{{$post->lowprice}} - Rp.{{$post->highprice}}</h4>
                                <p><strong>Available variants:</strong></p>
                                <ul>
                                    <li>{{$post->ukuran}}</li>
                                </ul>
                                <a href="https://wa.me/082286411152" class="btn btn-success mt-3"><i class="bi bi-whatsapp"></i> Order Now!</a>
                                <p class="mt-3">
                                    <strong>Tags:</strong> {{$post->tags}}
                                </p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <!-- Product Description -->
                        <div>
                            <p>
                                Description:
                                {!! $post->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Bootstrap Bundle JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>


{{-- @endif
@endauth --}}
@endif
@if($post->category_id == 5)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Update</title>
    <style>
  body,
        html {
            margin: 0;
            padding: 0;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .posting-news {
            background-color: #fff;
            border-radius: 10px;
            margin: 20px auto;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        .news-header {
    position: relative;
    margin-bottom: 30px;
    text-align: center;
}

.header-frame {
    background-color: rgba(0, 123, 255, 0.1); /* Subtle blue background */
    padding: 20px;
    border: 2px solid #007bff; /* Blue border */
    border-radius: 10px;
    margin-bottom: 20px;
}

.new-update-post {
    font-size: 24px;
    font-weight: bold;
    color: #007bff; /* Blue heading color */
    margin-bottom: 10px;
    text-shadow: 0 2px 3px rgba(0,0,0,0.1);
}

.news-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
}

.news-date {
    font-size: 14px;
    color: #777;
    font-style: italic;
}

        .news-image {
            text-align: center;
            margin-bottom: 20px;
        }

        .news-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            position: relative; /* Required for positioning the pseudo-elements */
        }

        .news-image img::before { /* Create the outer frame */
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 3px solid #007bff;
            z-index: -1; /* Place the frame behind the image */
        }

        .news-image img::after { /* Create the inner frame */
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 3px solid #fff;
            z-index: -1; /* Place the frame behind the image */
        }

        .news-content {
            text-align: justify;
            line-height: 1.6;
        }

        .news-content p {
            margin-bottom: 15px;
        }

        .content-frame {
        background-color: rgba(0, 123, 255, 0.1); /* Subtle blue background */
        padding: 20px;
        border: 2px solid #007bff; /* Blue border */
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: justify;
        }

        .price {
        background-color: rgba(0, 123, 255, 0.1); /* Subtle blue background */
        padding: 20px;
        border: 2px solid #007bff; /* Blue border */
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: justify;
        }

        .tags {
            background-color: rgba(0, 123, 255, 0.1); /* Subtle blue background */
        padding: 20px;
        border: 2px solid #007bff; /* Blue border */
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: justify;
        }

        .tags a {
            display: inline-block;
            margin: 0 5px;
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;  

        }

        .tags a:hover {
            background-color: #0056b3;
        }

        .btn-outline-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: transparent;
            color: #007bff;
            border: 1px solid #007bff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-outline-primary:hover {
            background-color: #007bff;
            color: #fff;
        }

    </style>
</head>
<body>

<div class="posting-news">
    <div class="news-header">
        <div class="header-frame">
            <h1 class="new-update-post">News Update</h1>
            <h2 class="news-title">{{ $post->title }}</h2>
            <p class="news-date">Dipublikasikan oleh {{ $post->user->name }} | {{ $post->created_at->format('d F Y') }}</p>
        </div>
    </div>

    <div class="news-image">
        @if ($post->image)
            <img src="{{ asset('assets/images/' . $post->image) }}" alt="{{ $post->title }}">
        @endif
    </div>

    @if ($post->category_id == 1)
    <div class="price">
        Harga : Rp.{{ $post->lowprice }},00 - Rp.{{ $post->highprice }},00.
    </div>
    @endif

    <div class="news-content">
        <h3>Description :</h3>
        <div class="content-frame">
            {!! $post->description !!}
        </div>
    </div>

    <div class="tags">
        Tags : {{ $post->tags }}
    </div>



    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
</div>

</body>
</html>

@endif
@endsection
{{-- @endif
@endauth --}}
