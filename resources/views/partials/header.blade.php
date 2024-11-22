<header>
    <h1>Selamat Datang di Aplikasi Manajemen Tugas</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/about') }}">Tentang</a></li>
            <li><a href="{{ url('/contact') }}">Kontak</a></li>
        </ul>
    </nav>
</header>

<style>
    header {
        background-color: #6c63ff; /* Warna dasar ungu */
        padding: 30px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        border-bottom: 2px solid #fff; /* Garis bawah putih */
    }

    header h1 {
        font-size: 2.5em;
        color: #fff; /* Warna teks putih */
        margin-bottom: 15px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    nav ul li {
        display: inline-block;
        margin: 0 15px; /* Jarak antar menu */
    }

    nav ul li a {
        text-decoration: none;
        color: #fff; /* Warna teks putih untuk link */
        font-weight: bold;
        font-size: 1.1em;
        padding: 10px 15px; /* Padding untuk tombol */
        border-radius: 5px; /* Sudut bulat */
        transition: background 0.3s, transform 0.3s; /* Efek transisi */
    }

    nav ul li a:hover {
        background: rgba(255, 255, 255, 0.3); /* Efek hover dengan transparansi putih */
        transform: scale(1.05); /* Memperbesar saat hover */
    }

    /* Media query untuk responsivitas */
    @media (max-width: 768px) {
        header {
            padding: 20px;
        }

        header h1 {
            font-size: 2em;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            font-size: 1em; /* Ukuran font yang lebih kecil untuk layar kecil */
        }
    }
</style>
