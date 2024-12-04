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
@if(in_array($post->category_id,[2,3,4,5]))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Update</title>
    <style>

        .news-section {
            background-color: #fff;
            border: none;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .news-section h2 {
            margin-top: 0;
            color: #212529;
            font-size: 2.5em;
            font-weight: 600;
        }

        .breadcrumb {
            background-color: transparent; /* Remove default background */
            padding: 0;
            margin-bottom: 20px;
            font-size: 0.9em;
        }

        .breadcrumb-item {
            color: #6c757d; /* Gray color for breadcrumb items */
        }

        .breadcrumb-item + .breadcrumb-item::before { /* Style the separator */
            content: ">";
            color: #6c757d;
            padding: 0 5px;
        }

        .breadcrumb-item.active {
            color: #007bff; /* Blue color for the active item */
        }

        .published-title {
            font-size: 2em; /* Slightly larger title */
            font-weight: 600; /* Bolder title */
            margin-bottom: 20px;
        }

        .published-info {
            font-size: 0.85em;
            color: #6c757d;
            text-align: right;
            margin-top: 20px;
        }

        .published-images img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 30px auto;
            border-radius: 5px;
        }

        .news-content {
            margin-top: 30px;
        }

        .news-content h3 {
            font-size: 1.4em;
            margin-bottom: 15px;
        }

        .content-frame {
            /* Add styles for the content area if needed */
        }

        .tags {
            margin-top: 30px;
            font-size: 0.9em;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <section class="news-section">
        <nav class="breadcrumb mb-4">
            <a class="breadcrumb-item" href="{{ url('/') }}">Beranda</a>
            <a class="breadcrumb-item" href="{{ url()->previous() }}">{{$post->category->name}}</a>
            <span class="breadcrumb-item active">{{$post->title}}</span>
        </nav>
        <div class="published-title">
            {{$post->title}}
        </div>
        <div class="published-info">
            <p class="news-date">Dipublikasikan oleh {{ $post->user->name }} | {{ $post->created_at->format('d F Y') }}</p>
        </div>
        <div class="published-images">
            @if ($post->image)
                <img src="{{ asset('assets/images/' . $post->image) }}" alt="{{ $post->title }}">
            @endif
        </div>

        <div class="news-content">
            <h3>Description :</h3>
            <div class="content-frame">
                {!! $post->description !!}
            </div>
        </div>

        <div class="tags">
            Tags : {{ $post->tags }}
        </div>
    </section>

</body>
</html>

@endif
@endsection
{{-- @endif
@endauth --}}
