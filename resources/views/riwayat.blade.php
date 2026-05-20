<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Riwayat Pemesanan - The Breadhouse</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>

    *{
      font-family: 'Poppins', sans-serif;
    }

    body{
      background: #faf7f3;
      overflow-x: hidden;
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

    /* section */

    .main{
      font-size: 38px;
      font-weight: 700;
      margin-bottom: 30px;
    }

    .main{
      padding: 80px 30px;
    }

    /* Header */

    .header{
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 40px;
    }

    .header h1{
      font-size: 65px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .header p{
      font-size: 22px;
      color: #8a6b57;
    }

    .header img{
      width: 250px;
    }

    /* Search */

    .search-box{
      position: relative;
      margin-bottom: 40px;
    }

    .search-box input{
      width: 100%;
      height: 70px;
      border-radius: 22px;
      border: 1px solid #eee;
      padding-left: 65px;
      font-size: 18px;
      background: white;
    }

    .search-box i{
      position: absolute;
      left: 25px;
      top: 22px;
      font-size: 22px;
      color: #a07d64;
    }

    /* Order Card */

    .order-card{
      background: white;
      border-radius: 30px;
      padding: 35px;
      margin-bottom: 30px;
      box-shadow: 0 5px 20px rgba(0,0,0,.03);
    }

    .order-id{
      font-size: 34px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .order-date{
      color: #8f6e59;
      font-size: 18px;
    }

    .status{
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #edf8e9;
      color: #3f9b2d;
      padding: 8px 18px;
      border-radius: 50px;
      margin-top: 18px;
      font-size: 16px;
      font-weight: 500;
    }

    .product-images{
      display: flex;
      gap: 15px;
      align-items: center;
    }

    .product-images img{
      width: 90px;
      height: 90px;
      border-radius: 18px;
      object-fit: cover;
    }

    .plus{
      width: 55px;
      height: 55px;
      background: #f6eee7;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      color: #7a3d15;
    }

    .total{
      font-size: 18px;
      color: #8b6d58;
    }

    .price{
      font-size: 42px;
      font-weight: 700;
      color: #4b250f;
    }

    .btn-detail{
      border: 2px solid #b97443;
      color: #7a3d15;
      padding: 15px 35px;
      border-radius: 50px;
      font-weight: 600;
      transition: .3s;
      background: white;
    }

    .btn-detail:hover{
      background: #7a3d15;
      color: white;
    }

    /* Footer Help */

    .help-box{
      background: #fff7f0;
      padding: 22px;
      border-radius: 20px;
      text-align: center;
      margin-top: 40px;
      font-size: 18px;
      color: #7a3d15;
      font-weight: 500;
    }

    .help-box i{
      margin-right: 8px;
    }

    /* Responsive */

    @media(max-width:992px){

      .sidebar{
        display: none;
      }

      .main{
        margin-left: 0;
        padding: 20px;
      }

      .header{
        flex-direction: column;
        text-align: center;
      }

      .header h1{
        font-size: 45px;
      }

      .product-images{
        margin: 25px 0;
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

          <li class="nav-item">
            <a class="nav-link" href="/riwayat-pemesanan">Riwayat</a>
          </li>

        </ul>

      </div>

    </div>
  </nav>


  <!-- Main -->

  <div class="main">

    <!-- Header -->

    <div class="header">

      <div>

        <h1>Riwayat Pemesanan</h1>

        <p>
          Berikut adalah daftar pesanan yang telah selesai.
        </p>

      </div>

    </div>

    <!-- Order Card -->

    <div class="order-card">

      <div class="row align-items-center">

        <div class="col-lg-3">

          <div class="order-id">
            #TBH240518-001
          </div>

          <div class="order-date">
            18 Mei 2024 • 10:23
          </div>

          <div class="status">
            <i class="bi bi-check-circle"></i>
            Selesai
          </div>

        </div>

        <div class="col-lg-4">

          <div class="product-images">

            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop">

            <img src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=800&auto=format&fit=crop">

            <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=800&auto=format&fit=crop">

            <div class="plus">
              +2
            </div>

          </div>

        </div>

        <div class="col-lg-3">

          <div class="total">
            5 Produk
          </div>

          <div class="mt-3">
            Total Pembayaran
          </div>

          <div class="price">
            Rp 152.000
          </div>

        </div>

        <div class="col-lg-2 text-end">

          <button class="btn-detail">
            Lihat Detail
          </button>

        </div>

      </div>

    </div>

    <!-- Order Card -->

    <div class="order-card">

      <div class="row align-items-center">

        <div class="col-lg-3">

          <div class="order-id">
            #TBH240516-002
          </div>

          <div class="order-date">
            16 Mei 2024 • 14:45
          </div>

          <div class="status">
            <i class="bi bi-check-circle"></i>
            Selesai
          </div>

        </div>

        <div class="col-lg-4">

          <div class="product-images">

            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop">

            <img src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=800&auto=format&fit=crop">

            <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=800&auto=format&fit=crop">

            <div class="plus">
              +1
            </div>

          </div>

        </div>

        <div class="col-lg-3">

          <div class="total">
            4 Produk
          </div>

          <div class="mt-3">
            Total Pembayaran
          </div>

          <div class="price">
            Rp 98.000
          </div>

        </div>

        <div class="col-lg-2 text-end">

          <button class="btn-detail">
            Lihat Detail
          </button>

        </div>

      </div>

    </div>

    <!-- Order Card -->

    <div class="order-card">

      <div class="row align-items-center">

        <div class="col-lg-3">

          <div class="order-id">
            #TBH240515-003
          </div>

          <div class="order-date">
            15 Mei 2024 • 09:12
          </div>

          <div class="status">
            <i class="bi bi-check-circle"></i>
            Selesai
          </div>

        </div>

        <div class="col-lg-4">

          <div class="product-images">

            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop">

            <img src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=800&auto=format&fit=crop">

            <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=800&auto=format&fit=crop">

            <div class="plus">
              +3
            </div>

          </div>

        </div>

        <div class="col-lg-3">

          <div class="total">
            6 Produk
          </div>

          <div class="mt-3">
            Total Pembayaran
          </div>

          <div class="price">
            Rp 210.500
          </div>

        </div>

        <div class="col-lg-2 text-end">

          <button class="btn-detail">
            Lihat Detail
          </button>

        </div>

      </div>

    </div>

    <!-- Help -->

    <div class="help-box">

      <i class="bi bi-whatsapp"></i>
      Butuh bantuan? Hubungi kami di WhatsApp 0812-3456-7890

    </div>

  </div>

  <!-- Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>