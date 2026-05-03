<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        .sidebar {
            width: 230px;
            height: 100vh;
            background: #8B4513;
            color: white;
            position: fixed;
            padding: 25px 20px;
        }

        .sidebar h2 {
            margin-bottom: 40px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 18px 0;
            padding: 12px;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background: #A0522D;
        }

        .content {
            margin-left: 270px;
            padding: 35px;
        }

        .header {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
            margin-bottom: 25px;
        }

        .cards {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            flex: 1;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .card h3 {
            margin: 0;
            color: #8B4513;
        }

        .menu-box {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            background: #8B4513;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            margin-right: 10px;
        }

        .btn.logout {
            background: #dc3545;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Toko Roti</h2>
        <a href="/admin/dashboard">Dashboard</a>
        <a href="/products">Kelola Produk</a>
        <a href="/login">Logout</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>Dashboard Admin Toko Roti</h1>
            <p>Selamat datang, Admin. Kelola data produk toko roti dengan mudah.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Produk</h3>
                <p>Kelola daftar roti dan makanan.</p>
            </div>

            <div class="card">
                <h3>Admin</h3>
                <p>Panel khusus pengelola toko.</p>
            </div>

            <div class="card">
                <h3>Status</h3>
                <p>Sistem berjalan aktif.</p>
            </div>
        </div>

        <div class="menu-box">
            <h2>Menu Utama</h2>
            <a href="/products" class="btn">Lihat & Kelola Produk</a>
            <a href="/login" class="btn logout">Logout</a>
        </div>
    </div>

</body>
</html>