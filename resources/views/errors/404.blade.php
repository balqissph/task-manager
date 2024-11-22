<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Warna latar belakang sama dengan halaman login */
            color: #fff; /* Warna teks putih */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 80px;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }

        p {
            font-size: 24px;
            margin: 10px 0;
            animation: fadeIn 1.5s ease-in-out;
        }

        a {
            text-decoration: none;
            color: #fff; /* Warna tautan putih */
            background-color: #007bff; /* Warna tombol */
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            animation: fadeIn 2s ease-in-out;
        }

        a:hover {
            background-color: #0056b3; /* Warna saat hover */
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div>
        <h1>404</h1>
        <p>Halaman Tidak Ditemukan</p>
        <p>Maaf, halaman yang Anda cari tidak ada.</p>
        <p><a href="{{ url('/login') }}">Kembali ke Halaman Login</a></p> <!-- Mengarahkan ke halaman login -->
    </div>
</body>
</html>
