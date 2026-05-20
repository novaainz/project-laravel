<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->nama }} - The Breadhouse</title>

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
            background: #faf7f3;
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

        /* Section */

        .detail-section{
            padding: 70px 0;
        }

        .product-image{
            width: 100%;
            height: 520px;
            object-fit: cover;
            border-radius: 30px;
        }

        .thumb-image{
            width: 100%;
            height: 110px;
            object-fit: cover;
            border-radius: 18px;
            cursor: pointer;
            transition: .3s;
        }

        .thumb-image:hover{
            transform: scale(1.05);
        }

        .badge-best{
            background: #f5e6d8;
            color: #7a3d15;
            padding: 10px 18px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
        }

        .product-title{
            font-size: 58px;
            font-weight: 700;
            margin-top: 20px;
        }

        .rating{
            color: #ffb400;
            font-size: 20px;
        }

        .price{
            font-size: 50px;
            font-weight: 700;
            margin: 25px 0;
            color: #4a2108;
        }

        .desc{
            color: #6c4f3d;
            line-height: 1.9;
            font-size: 18px;
        }

        .feature-box{
            border: 1px solid #eadfd5;
            border-radius: 24px;
            padding: 25px;
            text-align: center;
            background: white;
            height: 100%;
        }

        .feature-box i{
            font-size: 32px;
            color: #7a3d15;
            margin-bottom: 12px;
        }

        .feature-box h6{
            font-weight: 600;
        }

        .qty-box{
            border: 1px solid #ddd;
            border-radius: 15px;
            padding: 14px 25px;
            display: inline-flex;
            align-items: center;
            gap: 20px;
            font-size: 20px;
            font-weight: 600;
        }

        .btn-bread{
            background: #6b3413;
            color: white;
            border-radius: 16px;
            padding: 16px;
            border: none;
            font-weight: 600;
            transition: .3s;
        }

        .btn-bread:hover{
            background: #4d1f05;
            color: white;
        }

        .btn-outline-bread{
            border: 2px solid #6b3413;
            color: #6b3413;
            border-radius: 16px;
            padding: 16px;
            font-weight: 600;
        }

        .btn-outline-bread:hover{
            background: #6b3413;
            color: white;
        }

        /* Related */

        .section-title{
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 35px;
        }

        .related-card{
            background: white;
            border-radius: 24px;
            overflow: hidden;
            transition: .3s;
            box-shadow: 0 4px 18px rgba(0,0,0,.05);
        }

        .related-card:hover{
            transform: translateY(-8px);
        }

        .related-card img{
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .related-body{
            padding: 20px;
        }

        .related-title{
            font-size: 24px;
            font-weight: 600;
        }

        .related-price{
            color: #7a3d15;
            font-size: 24px;
            font-weight: 700;
        }

        /* Footer */

        footer{
            background: linear-gradient(to right, #2d1408, #4b250f);
            color: white;
            padding: 30px 0;
            margin-top: 80px;
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
            <a class="nav-link" href="/dashboard#contact">
              Contact Us
            </a>
          </li>

        </ul>

      </div>

    </div>
  </nav>

<!-- Detail -->

<section class="detail-section">

    <div class="container">

        <div class="row g-5 align-items-center">

            <!-- Image -->

            <div class="col-lg-6">

                <img 
                    src="{{ asset('storage/' . $product->gambar) }}"
                    class="product-image"
                >

            </div>

            <!-- Detail -->

            <div class="col-lg-6">

                <span class="badge-best">
                    BEST SELLER
                </span>

                <h1 class="product-title">
                    {{ $product->nama }}
                </h1>

                <!-- Harga -->

                <div class="price">

                    Rp {{ number_format($product->harga, 0, ',', '.') }}

                </div>

                <!-- Deskripsi -->

                <p class="desc">

                    {{ $product->deskripsi }}

                </p>

                <!-- Feature -->

                <div class="row g-3 my-4">

                    <div class="col-md-4">

                        <div class="feature-box">

                            <i class="bi bi-flower1"></i>

                            <h6>Bahan Berkualitas</h6>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="feature-box">

                            <i class="bi bi-basket2"></i>

                            <h6>Fresh Setiap Hari</h6>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="feature-box">

                            <i class="bi bi-heart"></i>

                            <h6>Dibuat dengan Cinta</h6>

                        </div>

                    </div>

                </div>

                <!-- Button -->

                <div class="d-grid gap-3">

                    <a 
                        href="https://wa.me/6285794039638?text=Saya ingin memesan {{ $product->nama }}"
                        class="btn btn-outline-bread btn-lg"
                    >

                        <i class="bi bi-whatsapp me-2"></i>

                        Order via WhatsApp

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Footer -->

<footer>

    <div class="container text-center">

        © 2024 The Breadhouse. All Rights Reserved.

    </div>

</footer>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
