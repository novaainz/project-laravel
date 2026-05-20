<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->nama }} - The Breadhouse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: #f8f5f2;
            font-family: Poppins, sans-serif;
        }

        .detail-section{
            padding: 80px 0;
        }

        .product-image{
            width: 100%;
            border-radius: 25px;
            object-fit: cover;
            height: 500px;
        }

        .product-title{
            font-size: 50px;
            font-weight: 700;
        }

        .price{
            color: #7a3d15;
            font-size: 36px;
            font-weight: 700;
            margin: 20px 0;
        }

        .btn-order{
            background: #7a3d15;
            color: white;
            border-radius: 14px;
            padding: 14px 35px;
            border: none;
        }

    </style>

</head>
<body>

<section class="detail-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Gambar -->

            <div class="col-lg-6">

                <img 
                    src="{{ asset('storage/' . $product->gambar) }}"
                    class="product-image"
                >

            </div>

            <!-- Detail -->

            <div class="col-lg-6">

                <h1 class="product-title">
                    {{ $product->nama }}
                </h1>

                <div class="price">

                    Rp {{ number_format($product->harga, 0, ',', '.') }}

                </div>

                <p>

                    {{ $product->deskripsi }}

                </p>

                <a 
                    href="https://wa.me/6285794039638?text=Saya ingin memesan {{ $product->nama }}"
                    class="btn btn-order"
                >
                    Order Sekarang
                </a>

            </div>

        </div>

    </div>

</section>

</body>
</html>