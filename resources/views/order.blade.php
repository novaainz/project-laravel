<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Order Roti - The Breadhouse</title>

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

    /* Header */

    .header-order{
      background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),
      url('https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=1600&auto=format&fit=crop');

      background-size: cover;
      background-position: center;
      padding: 120px 0;
      color: white;
      text-align: center;
    }

    .header-order h1{
      font-size: 60px;
      font-weight: 700;
    }

    .header-order p{
      font-size: 20px;
      margin-top: 15px;
    }

    /* Form */

    .order-section{
      padding: 80px 0;
    }

    .order-card{
      background: white;
      border-radius: 25px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0,0,0,.05);
    }

    .form-control,
    .form-select{
      height: 55px;
      border-radius: 14px;
      border: 1px solid #ddd;
    }

    textarea.form-control{
      height: 120px;
    }

    .form-label{
      font-weight: 600;
      margin-bottom: 10px;
    }

    /* Product Summary */

    .summary-box{
      background: #fff7f0;
      border-radius: 20px;
      padding: 30px;
    }

    .summary-box img{
      width: 100%;
      border-radius: 20px;
      object-fit: cover;
      height: 220px;
    }

    .price{
      color: #7a3d15;
      font-size: 30px;
      font-weight: 700;
    }

    /* Button */

    .btn-order{
      background: #25D366;
      color: white;
      border: none;
      padding: 16px;
      width: 100%;
      border-radius: 15px;
      font-size: 18px;
      font-weight: 600;
      transition: .3s;
    }

    .btn-order:hover{
      background: #1da851;
    }

    footer{
      background: linear-gradient(to right, #2d1408, #4b250f);
      color: white;
      padding: 25px 0;
      margin-top: 80px;
    }

    @media(max-width:768px){

      .header-order h1{
        font-size: 40px;
      }

      .order-card{
        padding: 25px;
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

  <section class="header-order">

    <div class="container">

      <h1>Pesan Roti Favoritmu</h1>

      <p>
        Isi form di bawah dan pesanan akan langsung dikirim ke WhatsApp admin.
      </p>

    </div>

  </section>

  <!-- Order Section -->

  <section class="order-section">

    <div class="container">

      <div class="row g-5">

              <!-- Button -->

              <button 
                type="submit"
                class="btn-order"
              >

                <i class="bi bi-whatsapp"></i>
                Pesan via WhatsApp

              </button>

            </form>

          </div>

        </div>

  <!-- Footer -->

  <footer>

    <div class="container text-center">

      © 2024 The Breadhouse. All Rights Reserved.

    </div>

  </footer>

  <!-- Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- WhatsApp Script -->

  <script>

    document.getElementById("orderForm").addEventListener("submit", function(e){

      e.preventDefault();

      let nama = document.getElementById("nama").value;
      let nomor = document.getElementById("nomor").value;
      let roti = document.getElementById("roti").value;
      let jumlah = document.getElementById("jumlah").value;
      let alamat = document.getElementById("alamat").value;
      let catatan = document.getElementById("catatan").value;

      let pesan = 
`Halo The Breadhouse 👋

Saya ingin memesan roti:

👤 Nama : ${nama}
📱 Nomor : ${nomor}
🍞 Roti : ${roti}
🛒 Jumlah : ${jumlah}
📍 Alamat : ${alamat}
📝 Catatan : ${catatan}

Terima kasih 😊`;

      let nomorAdmin = "6281234567890";

      let url = `https://wa.me/${nomorAdmin}?text=${encodeURIComponent(pesan)}`;

      window.open(url, "_blank");

    });

  </script>

</body>
</html>