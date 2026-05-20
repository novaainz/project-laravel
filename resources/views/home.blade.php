<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Breadhouse</title>

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
      background: #f8f5f2;
      color: #3d220f;
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

    /* Hero */
    .hero{
      background: linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)),
      url('https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=1600&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
      min-height: 600px;
      display: flex;
      align-items: center;
    }

    .hero h1{
      font-size: 70px;
      font-weight: 700;
      line-height: 1.1;
    }

    .hero p{
      font-size: 20px;
      color: #6d4a35;
      margin: 25px 0;
    }

    .btn-bread{
      background: #6b3413;
      color: white;
      border-radius: 14px;
      padding: 14px 30px;
      border: none;
      font-weight: 500;
    }

    .btn-bread:hover{
      background: #4e2208;
      color: white;
    }

    /* Section */
    .section-title{
      font-size: 38px;
      font-weight: 700;
      margin-bottom: 30px;
    }

    .section-space{
      padding: 80px 0;
    }

    /* Card Produk */
    .product-card{
      border: none;
      border-radius: 20px;
      overflow: hidden;
      background: white;
      transition: .3s;
      box-shadow: 0 4px 15px rgba(0,0,0,.05);
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

    .product-title{
      font-size: 24px;
      font-weight: 600;
    }

    .price{
      color: #7b3f18;
      font-size: 22px;
      font-weight: 700;
    }

    .badge-sale{
      position: absolute;
      top: 15px;
      right: 15px;
      background: #ff9800;
      padding: 8px 15px;
      border-radius: 50px;
      color: white;
      font-size: 14px;
      font-weight: 500;
    }

    /* Category */
    .category-card{
      position: relative;
      overflow: hidden;
      border-radius: 20px;
      height: 220px;
    }

    .category-card img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: .4s;
    }

    .category-card:hover img{
      transform: scale(1.1);
    }

    .overlay{
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,.35);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 30px;
      font-weight: 600;
    }

    /* Feature */
    .feature-box{
      text-align: center;
      padding: 30px 20px;
    }

    .feature-box i{
      font-size: 45px;
      color: #6b3413;
      margin-bottom: 15px;
    }

    .feature-box h5{
      font-weight: 600;
    }

    /* CTA */
    .cta{
      background: linear-gradient(rgba(255,255,255,.85), rgba(255,255,255,.85)),
      url('https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=1600&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
      border-radius: 30px;
      padding: 70px;
    }

    .cta h2{
      font-size: 50px;
      font-weight: 700;
    }

    footer{
      background: linear-gradient(to right, #2d1408, #4b250f);
      color: white;
      padding: 25px 0;
    }

    .social i{
      font-size: 28px;
      margin-left: 15px;
      cursor: pointer;
    }

    @media(max-width:768px){

      .hero{
        text-align: center;
      }

      .hero h1{
        font-size: 45px;
      }

      .cta{
        padding: 40px 25px;
      }

      .cta h2{
        font-size: 34px;
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
            <a class="nav-link" href="/produk">Produk & Order</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">
              Contact Us
            </a>
          </li>

        </ul>

      </div>

    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <h1>
            Roti Hangat,<br>
            Kebahagiaan Sehari-hari
          </h1>

          <p>
            Dibuat dengan bahan berkualitas dan penuh cinta
            untuk setiap gigitan terbaik.
          </p>

          <button class="btn btn-bread">
            Lihat Menu
          </button>
        </div>

      </div>
    </div>
  </section>

  <!-- Rekomendasi -->
  <section class="section-space">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="section-title">Rekomendasi Roti</h2>
      </div>

      <div class="row g-4">

        <!-- Produk -->
        <div class="col-lg-3 col-md-6">
          <div class="card product-card">

            <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">
              <h5 class="product-title">Roti Cokelat</h5>
              <p class="price">Rp 18.000</p>

              <button class="btn btn-bread">
                Order
              </button>
            </div>

          </div>
        </div>

        <!-- Produk 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="card product-card">

            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">
              <h5 class="product-title">Roti Almond</h5>
              <p class="price">Rp 20.000</p>

              <button class="btn btn-bread">
                Order
              </button>
            </div>

          </div>
        </div>

        <!-- Produk 3 -->
        <div class="col-lg-3 col-md-6">
          <div class="card product-card">

            <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">
              <h5 class="product-title">Roti Keju</h5>
              <p class="price">Rp 18.000</p>

              <button class="btn btn-bread">
                Order
              </button>
            </div>

          </div>
        </div>

        <!-- Produk 4 -->
        <div class="col-lg-3 col-md-6">
          <div class="card product-card position-relative">

            <span class="badge-sale">
              Sale
            </span>

            <img src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=800&auto=format&fit=crop">

            <div class="product-body text-center">
              <h5 class="product-title">Roti Sosis</h5>

              <small class="text-decoration-line-through text-muted">
                Rp 22.000
              </small>

              <p class="price">Rp 18.000</p>

              <button class="btn btn-bread">
                Order
              </button>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Kategori -->
  <section class="pb-5">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="section-title">Kategori Roti</h2>
      </div>

      <div class="row g-4">

        <div class="col-lg-3 col-md-6">
          <div class="category-card">
            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop">
            <div class="overlay">Roti Manis</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="category-card">
            <img src="https://images.unsplash.com/photo-1585478259715-1c093d0d6b41?q=80&w=800&auto=format&fit=crop">
            <div class="overlay">Roti Tawar</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="category-card">
            <img src="https://images.unsplash.com/photo-1483695028939-5bb13f8648b0?q=80&w=800&auto=format&fit=crop">
            <div class="overlay">Roti Asin</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="category-card">
            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=800&auto=format&fit=crop">
            <div class="overlay">Kue & Pastry</div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Feature -->
  <section class="section-space bg-white">
    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="feature-box">
            <i class="bi bi-flower1"></i>
            <h5>Bahan Berkualitas</h5>
            <p>Kami hanya menggunakan bahan pilihan terbaik.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-box">
            <i class="bi bi-basket2"></i>
            <h5>Dibuat Setiap Hari</h5>
            <p>Roti selalu fresh dan dibuat setiap hari.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-box">
            <i class="bi bi-truck"></i>
            <h5>Pengiriman Cepat</h5>
            <p>Pesanan aman dan cepat sampai tujuan.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-box">
            <i class="bi bi-heart"></i>
            <h5>Dibuat dengan Cinta</h5>
            <p>Setiap roti dibuat penuh perhatian.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="section-space">
    <div class="container">

      <div class="cta">

        <div class="row align-items-center">

          <div class="col-lg-6">
            <h2>
              Butuh Roti untuk Acara Spesial?
            </h2>

            <p class="my-4">
              Kami menerima pesanan dalam jumlah besar
              untuk ulang tahun, meeting, arisan,
              dan acara lainnya.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Contact Us -->
<section id="contact" class="section-space bg-white">

  <div class="container">

    <div class="text-center mb-5">

      <h2 class="section-title">
        Contact Us
      </h2>

      <p>
        Hubungi kami untuk pemesanan dan informasi lebih lanjut.
      </p>

    </div>

    <div class="row g-5">

      <!-- Google Maps -->
      <div class="col-lg-6">

        <div class="rounded-4 overflow-hidden shadow-sm">

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18..."
            width="100%"
            height="350"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
          </iframe>

        </div>

      </div>

      <!-- Contact Info -->
      <div class="col-lg-6 d-flex flex-column justify-content-center">

        <h4 class="mb-4">
          The Breadhouse
        </h4>

        <p>
          <i class="bi bi-geo-alt-fill me-2"></i>
          Bandar Lampung, Indonesia
        </p>

        <p>
          <i class="bi bi-whatsapp me-2"></i>
          0882-7744-5619
        </p>

        <p>
          <i class="bi bi-envelope-fill me-2"></i>
          breadhouse@gmail.com
        </p>

        <!-- Sosial Media -->
        <div class="mt-4 d-flex gap-3">

          <a href="https://instagram.com/thebreadhouse"
             target="_blank"
             class="btn btn-dark rounded-circle">

            <i class="bi bi-instagram"></i>
          </a>

          <a href="https://facebook.com/thebreadhouse"
             target="_blank"
             class="btn btn-dark rounded-circle">

             <i class="bi bi-facebook"></i>
          </a>

          <a href="https://youtube.com/@thebreadhouse"
             target="_blank"
             class="btn btn-dark rounded-circle">

             <i class="bi bi-youtube"></i>
          </a>

          <a href="https://wa.me/62882877445619"
             class="btn btn-success rounded-circle">
            <i class="bi bi-whatsapp"></i>
          </a>

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
          © 2026 The Breadhouse. All Rights Reserved.
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