<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Detail</title>
    <style>
        /* Gaya untuk keseluruhan halaman */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
            background-color: #f7f9fc;
        }

        /* Container utama */
        .container {
            width: 90%;
            max-width: 500px;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Judul halaman */
        h1 {
            color: #4e54c8;
            font-size: 26px;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #4e54c8;
            padding-bottom: 10px;
        }

        /* Label dan deskripsi */
        .label {
            font-weight: bold;
            color: #555;
        }

        p {
            font-size: 16px;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        /* Tombol Kembali */
        .btn-back {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #4e54c8;
            color: #ffffff;
            padding: 12px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #3a3f8c;
        }

        /* Responsif untuk layar lebih kecil */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 22px;
            }

            p, .btn-back {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $task->title }}</h1>
        <p><span class="label">Deskripsi:</span> {{ $task->description }}</p>
        <p><span class="label">Status:</span> {{ $task->status }}</p>
        <p><span class="label">Tanggal Selesai:</span> 
            {{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d M Y') : 'Belum selesai' }}
        </p>
        <p><span class="label">Kategori:</span> {{ $task->category->name ?? 'Tidak ada kategori' }}</p>

        <a href="{{ route('tasks.index') }}" class="btn-back">Kembali</a>
    </div>
</body>
</html>
