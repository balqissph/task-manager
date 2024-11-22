<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    <style>
        /* Gaya untuk keseluruhan halaman */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
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
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Form input */
        form input[type="text"], form input[type="date"], form select, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: #fafafa;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        form input[type="text"]:focus, form input[type="date"]:focus, form select:focus, form textarea:focus {
            border-color: #4e54c8;
            background-color: #ffffff;
        }

        /* Textarea untuk deskripsi */
        textarea {
            height: 100px;
            resize: vertical;
        }

        /* Tombol submit */
        form button {
            width: 100%;
            padding: 10px;
            background-color: #4e54c8;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
            text-transform: uppercase;
        }

        form button:hover {
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

            form input[type="text"], form input[type="date"], form select, form textarea, form button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Task</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama" required>
            <input type="text" name="slug" placeholder="Slug" required>
            <textarea name="description" placeholder="Deskripsi" required></textarea>

            <!-- Tombol Submit -->
            <button type="submit">Tambah Tugas</button>
        </form>
    </div>
</body>
</html>
