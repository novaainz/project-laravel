<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8B4513, #D2B48C);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 380px;
            background: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.18);
            text-align: center;
        }

        .login-card h2 {
            color: #8B4513;
            margin-bottom: 8px;
        }

        .login-card p {
            color: #777;
            margin-bottom: 25px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            color: #444;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: #8B4513;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #A0522D;
        }

        .error {
            background: #ffe5e5;
            color: #c0392b;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2> Login Admin</h2>
        <p>Masuk ke Dashboard Toko Roti</p>

        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>

</body>
</html>