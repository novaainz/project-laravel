<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Detail Roti - The Breadhouse</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>

    *{
      font-family: 'Poppins', sans-serif;
    }

    body{
      background: #f8f5f2;
      color: #3d220f;
    }

    /* Navbar */

    .navbar{
      background: linear-gradient(to right, #2d1408, #4b250f);
      padding: 18px 0;
    }

    .navbar-brand{
      color: white !important;
      font-size: 30px;
      font-weight: 700;
    }

    .nav-link{
      color: white !important;
      margin: 0 10px;
      font-weight: 500;
    }

    .icon-nav{
      color: white;
      font-size: 23px;
      margin-left: 18px;
      cursor: pointer;
    }

    /* Detail Produk */

    .detail-section{
      padding: 70px 0;
    }

    .product-image{
      width: 100%;
      border-radius: 25px;
      object-fit: cover;
      height: 520px;
      box-shadow: 0 10px 25px rgba(0,0,0,.08);
    }

    .small-image{
      width: 100%;
      height: 110px;
      object-fit: cover;
      border-radius: 15px;
      cursor: pointer;
      transition: .3s;
      border: 3px solid transparent;
    }

    .small-image:hover{
      border-color: #7a3d15;
    }

    .breadcrumb a{
      text-decoration: none;
      color: #7a3d15;
    }

    .product-title{
      font-size: 55px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .rating{
      color: #ffb400;
      font-size: 18px;
    }

    .price{
      font-size: 42px;
      color: #7a3d15;
      font-weight: 700;
      margin: 20px 0;
    }

    .description{
      color: #6a584d;
      line-height: 1.9;
      font-size: 17px;
    }

    .badge-custom{
      background: #f3e5d8;
      color: #7a3d15;
      padding: 10px 18px;
      border-radius: 50px;
      margin-right: 10px;
      display: inline-block;
      margin-top: 10px;
      font-size: 14px;
    }

    .quantity-box{
      display: flex;
      align-items: center;
      gap: 15px;
      margin-top: 25px;
    }

    .qty-btn{
      width: 45px;
      height: 45px;
      border: none;
      border-radius: 12px;
      background: #7a3d15;
      color: white;
      font-size: 20px;
    }

    .qty-number{
      font-size: 22px;
      font-weight: 600;
    }

    .btn-bread{
      background: #7a3d15;
      color: white;
      padding: 16px 35px;
      border-radius: 15px;
      border: none;
      font-weight: 500;
      margin-top: 30px;
      margin-right: 15px;
    }

    .btn-bread:hover{
      background: #542309;
      color: white;
    }

    .btn-outline-bread{
      border: 2px solid #7a3d15;
      color: #7a3d15;
      padding: 16px 35px;
      border-radius: 15px;
      font-weight: 500;
      margin-top: 30px;
    }

    .btn-outline-bread:hover{
      background: #7a3d15;
      color: white;
    }

    /* Info Box */

    .info-box{
      background: white;
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 5px 15px rgba(0,0,0,.05);
      margin-top: 50px;
    }

    .info-icon{
      width: 60px;
      height: 60px;
      background: #f5e8dd;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #7a3d15;
      font-size: 28px;
      margin-bottom: 15px;
    }

    /* Recommendation */

    .section-title{
      font-size: 40px;
      font-weight: 700;
      margin-bottom: 40px;
    }

    .product-card{
      border: none;
      border-radius: 20px;
      overflow: hidden;
      background: white;
      box-shadow: 0 5px 15px rgba(0,0,0,.05);
      transition: .3s;
    }

    .product-card:hover{
      transform: translateY(-8px);
    }

    .product-card img{
      height: 240px;
      object-fit: cover;
    }

    .product-body{
      padding: 20px;
    }

    .product-body h5{
      font-weight: 600;
    }

    footer{
      background: linear-gradient(to right, #2d1408, #4b250f);
      color: white;
      padding: 25px 0;
      margin-top: 80px;
    }

    .social i{
      font-size: 28px;
      margin-left: 15px;
    }

    @media(max-width:768px){

      .product-title{
        font-size: 40px;
      }

      .product-image{
        height: 350px;
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

        <ul class="navbar-nav mx-auto">

          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Order</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>

        </ul>

        <div>
          <i class="bi bi-search icon-nav"></i>
          <i class="bi bi-cart3 icon-nav"></i>
          <i class="bi bi-person-circle icon-nav"></i>
        </div>

      </div>

    </div>
  </nav>

  <!-- Detail Produk -->

  <section class="detail-section">
    <div class="container">

      <!-- Breadcrumb -->

      <nav class="breadcrumb mb-4">
        <a href="#">Home</a>
        <span class="mx-2">/</span>

        <a href="#">Roti</a>
        <span class="mx-2">/</span>

        <span>Roti Almond</span>
      </nav>

      <div class="row g-5 align-items-center">

        <!-- Gambar -->

        <div class="col-lg-6">

          <img 
            src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=1200&auto=format&fit=crop" 
            class="product-image"
          >

          <div class="row mt-4">

            <div class="col-4">
              <img 
                src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop" 
                class="small-image"
              >
            </div>

            <div class="col-4">
              <img 
                src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=800&auto=format&fit=crop" 
                class="small-image"
              >
            </div>

            <div class="col-4">
              <img 
                src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=800&auto=format&fit=crop" 
                class="small-image"
              >
            </div>

          </div>

        </div>

        <!-- Detail -->

        <div class="col-lg-6">

          <h1 class="product-title">
            Roti Almond
          </h1>

          <div class="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>

            <span class="text-dark ms-2">
              (4.8)
            </span>
          </div>

          <div class="price">
            Rp 20.000
          </div>

          <p class="description">
            Roti almond premium dengan tekstur lembut dan topping almond
            panggang yang renyah. Dibuat menggunakan mentega berkualitas
            tinggi dan dipanggang setiap hari untuk menjaga rasa dan aroma
            terbaik.
          </p>

          <div class="mt-4">

            <span class="badge-custom">
              Fresh Daily
            </span>

            <span class="badge-custom">
              Best Seller
            </span>

            <span class="badge-custom">
              Premium Bread
            </span>

          </div>

          <!-- Quantity -->

          <div class="quantity-box">

            <button class="qty-btn">
              -
            </button>

            <span class="qty-number">
              1
            </span>

            <button class="qty-btn">
              +
            </button>

          </div>

          <!-- Button -->

          <div>

            <button class="btn btn-bread">
              <i class="bi bi-cart-plus"></i>
              Tambah ke Keranjang
            </button>

            <button class="btn btn-outline-bread">
              <i class="bi bi-heart"></i>
              Favorit
            </button>

          </div>

        </div>

      </div>

      <!-- Info -->

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info-box">

            <div class="info-icon">
              <i class="bi bi-truck"></i>
            </div>

            <h5>Pengiriman Cepat</h5>

            <p>
              Pesanan dikirim dengan aman dan cepat sampai tujuan.
            </p>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="info-box">

            <div class="info-icon">
              <i class="bi bi-shield-check"></i>
            </div>

            <h5>Kualitas Terjamin</h5>

            <p>
              Menggunakan bahan pilihan berkualitas premium terbaik.
            </p>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="info-box">

            <div class="info-icon">
              <i class="bi bi-award"></i>
            </div>

            <h5>Best Seller</h5>

            <p>
              Salah satu roti favorit pelanggan di The Breadhouse.
            </p>

          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Produk Lain -->

  <section class="pb-5">
    <div class="container">

      <h2 class="section-title">
        Rekomendasi Lainnya
      </h2>

      <div class="row g-4">

        <!-- Item -->

        <div class="col-lg-3 col-md-6">

          <div class="card product-card">

            <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">

              <h5>Roti Cokelat</h5>

              <p class="fw-bold text-brown">
                Rp 18.000
              </p>

              <button class="btn btn-bread">
                Lihat Detail
              </button>

            </div>

          </div>

        </div>

        <!-- Item -->

        <div class="col-lg-3 col-md-6">

          <div class="card product-card">

            <img src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">

              <h5>Roti Sosis</h5>

              <p class="fw-bold text-brown">
                Rp 22.000
              </p>

              <button class="btn btn-bread">
                Lihat Detail
              </button>

            </div>

          </div>

        </div>

        <!-- Item -->

        <div class="col-lg-3 col-md-6">

          <div class="card product-card">

            <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">

              <h5>Roti Keju</h5>

              <p class="fw-bold text-brown">
                Rp 19.000
              </p>

              <button class="btn btn-bread">
                Lihat Detail
              </button>

            </div>

          </div>

        </div>

        <!-- Item -->

        <div class="col-lg-3 col-md-6">

          <div class="card product-card">

            <img src="https://images.unsplash.com/photo-1483695028939-5bb13f8648b0?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">

              <h5>Roti Garlic</h5>

              <p class="fw-bold text-brown">
                Rp 24.000
              </p>

              <button class="btn btn-bread">
                Lihat Detail
              </button>

            </div>

          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Footer -->

  <footer>

    <div class="container">

      <div class="d-flex justify-content-between align-items-center">

        <p class="mb-0">
          © 2024 The Breadhouse. All Rights Reserved.
        </p>

        <div class="social">
          <i class="bi bi-instagram"></i>
          <i class="bi bi-facebook"></i>
          <i class="bi bi-whatsapp"></i>
        </div>

      </div>

    </div>

  </footer>

  <!-- Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>