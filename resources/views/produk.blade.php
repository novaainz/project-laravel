<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Produk Roti - The Breadhouse</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>

    *{
      font-family: 'Poppins', sans-serif;
    }

    body{
      background: #faf7f2;
      color: #4b250f;
    }

    a{
      text-decoration: none;
    }

    /* Navbar */
    .navbar{
      background: linear-gradient(to right, #2d1408, #4b250f);
      padding: 18px 0;
    }

    .navbar-brand{
      font-size: 32px;
      font-weight: 700;
      color: white !important;
    }

    .nav-link{
      color: white !important;
      margin: 0 10px;
      font-weight: 500;
    }

    .icon-nav{
      color: white;
      font-size: 24px;
      margin-left: 18px;
      cursor: pointer;
    }

    /* Header */

    .header{
      padding: 80px 0 40px;
      text-align: center;
    }

    .header h1{
      font-size: 60px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .header p{
      color: #8a6b57;
      font-size: 20px;
    }

    /* Product Card */

    .product-section{
      padding-bottom: 80px;
    }

    .product-card{
      background: white;
      border-radius: 25px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0,0,0,.05);
      transition: .3s;
      height: 100%;
    }

    .product-card:hover{
      transform: translateY(-8px);
    }

    .product-card img{
      width: 100%;
      height: 240px;
      object-fit: cover;
    }

    .product-body{
      padding: 25px;
      text-align: center;
    }

    .product-body h4{
      font-weight: 600;
      margin-bottom: 10px;
    }

    .price{
      color: #7a3d15;
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .btn-order{
      background: #7a3d15;
      color: white;
      border: none;
      padding: 12px 28px;
      border-radius: 50px;
      transition: .3s;
      font-weight: 500;
    }

    .btn-order:hover{
      background: #5a2b0d;
    }

    /* Footer */

    footer{
      background: #4b250f;
      color: white;
      text-align: center;
      padding: 25px;
    }

    /* Responsive */

    @media(max-width:768px){

      .header h1{
        font-size: 40px;
      }

    }

  </style>
</head>
<body>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg">
    <div class="container">

      <a class="navbar-brand" href="#">
        The Breadhouse
      </a>

      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/produk">Roti</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="/order">Order</a>
          </li>

        </ul>

      </div>

    </div>
  </nav>

  <!-- Header -->

  <section class="header">

    <div class="container">

      <h1>Daftar Roti</h1>

      <p>
        Pilihan roti fresh dan lezat setiap hari.
      </p>

    </div>

  </section>

  <!-- Product -->

  <section class="product-section">

    <div class="container">

      <div class="row g-4">

@foreach($products as $product)

<div class="col-lg-4 col-md-6">

  <div class="product-card">

    @if($product->gambar)

      <img src="{{ asset('storage/' . $product->gambar) }}">

    @else

      <img src="https://via.placeholder.com/400x300">

    @endif

    <div class="product-body">

      <h4>
        {{ $product->nama }}
      </h4>

      <div class="price">
        Rp {{ number_format($product->harga, 0, ',', '.') }}
      </div>

      <div>
      <a href="/produk/{{ $product->id }}" class="btn btn-bread">
        Detail
      </a>
      </div>

      <a href="/order"
         class="btn btn-order">

        Order

      </a>

    </div>

  </div>

</div>

@endforeach

      </div>

    </div>

  </section>

  <!-- Footer -->

  <footer>

    © 2024 The Breadhouse. All Rights Reserved.

  </footer>

  <!-- Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>