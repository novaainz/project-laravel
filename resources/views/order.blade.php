<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Roti</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .header-box {
            background: #8B5A2B;
            color: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .btn-order {
            background: white;
            color: black;
            font-weight: bold;
            border-radius: 15px;
            padding: 15px 30px;
            box-shadow: 0 5px 0 rgba(0,0,0,0.3);
        }

        .product-card {
            background: white;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>

    
</head>
<body>

<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#302402;">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">THE BREADHOUSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dashboard">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/order">Order</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="container mt-5">


    <!-- HEADER -->
    <div class="header-box d-flex justify-content-between align-items-center mb-5">
        <h1 class="fw-bold">THE BREADHOUSE</h1>

        <a href="https://wa.me/085794039638" class="btn btn-order">
            PESAN SEKARANG
        </a>
    </div>


</div>

</body>
</html>