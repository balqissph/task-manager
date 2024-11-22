<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradient background */
            display: flex;
            justify-content: center; /* Pusatkan konten secara horizontal */
            align-items: center; /* Pusatkan konten secara vertikal */
            height: 100vh; /* Full height viewport */
        }

        .container {
            background: white; /* Latar belakang form */
            padding: 40px;
            border-radius: 8px; /* Sudut melengkung pada form */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Bayangan halus di bawah form */
            width: 400px; /* Lebar tetap untuk form */
            text-align: center; /* Pusatkan teks dalam form */
        }

        h1 {
            margin-bottom: 20px;
            color: #333; /* Warna teks untuk judul */
        }

        div {
            margin-bottom: 15px; /* Jarak antar elemen input */
            text-align: left; /* Rata kiri untuk label dan input */
        }

        label {
            display: block; /* Membuat label dalam blok */
            margin-bottom: 5px; /* Jarak antara label dan input */
            color: #555; /* Warna teks untuk label */
        }

        input[type="email"],
        input[type="password"] {
            width: 100%; /* Lebar penuh untuk input */
            padding: 10px; /* Jarak dalam input */
            border: 1px solid #ccc; /* Batas abu-abu pada input */
            border-radius: 4px; /* Sudut melengkung pada input */
            font-size: 16px; /* Ukuran font untuk input */
            transition: border-color 0.3s; /* Transisi warna batas */
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff; /* Warna batas saat input fokus */
            outline: none; /* Menghilangkan outline default */
        }

        button {
            background-color: #007bff; /* Warna latar belakang tombol */
            color: white; /* Warna teks pada tombol */
            border: none; /* Tanpa batas */
            border-radius: 4px; /* Sudut melengkung pada tombol */
            padding: 10px 15px; /* Jarak dalam tombol */
            cursor: pointer; /* Menampilkan pointer saat hover */
            font-size: 16px; /* Ukuran font untuk tombol */
            transition: background-color 0.3s; /* Transisi warna latar belakang */
            width: 100%; /* Lebar penuh untuk tombol */
        }

        button:hover {
            background-color: #0056b3; /* Warna saat tombol di-hover */
        }

        p {
            margin-top: 10px; /* Jarak atas untuk paragraf */
            color: #666; /* Warna teks untuk paragraf */
        }

        a {
            color: #007bff; /* Warna tautan */
            text-decoration: none; /* Tanpa garis bawah pada tautan */
        }

        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Login</h1>

    @if (session('success'))
    <div style="color: green; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a></p>
</div>

</body>
</html>
