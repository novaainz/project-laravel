<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body style="font-family: Arial; text-align: center;">

    <h1>Dashboard Admin Toko Roti</h1>

    <p>Selamat datang, Admin</p>

    <hr style="width: 50%;">

    <h3>Menu</h3>

    <a href="/products">
        <button>Lihat & Kelola Produk</button>
    </a>

    <br><br>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>