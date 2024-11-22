@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home-container">
        <h1>Selamat Datang di Aplikasi Manajemen Tugas</h1>
        <p>Ini adalah aplikasi untuk membantu Anda mengelola tugas-tugas Anda dengan lebih baik.</p>

        <div class="features">
            <h2>Fitur Utama:</h2>
            <ul>
                <li>Tambahkan, edit, dan hapus tugas.</li>
                <li>Atur status dan tenggat waktu tugas.</li>
                <li>Lihat daftar tugas yang ditugaskan kepada Anda.</li>
            </ul>
        </div>

        <div class="action-buttons">
            @if (Auth::check())
                <!-- Jika user sudah login -->
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Lihat Daftar Tugas</a>
                <a href="{{ route('tasks.create') }}" class="btn btn-success">Buat Tugas Baru</a>
            @else
                <!-- Jika user belum login -->
                <p>Anda harus login atau daftar terlebih dahulu untuk membuat dan melihat tugas.</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-success">Daftar</a>
            @endif
        </div>
    </div>

    <style>
    .home-container {
    text-align: center;
    margin: 50px auto;
    padding: 40px;
    border-radius: 15px;
    background: linear-gradient(135deg, #6c63ff, #66ccff);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    max-width: 700px;
    color: #fff;
    }

    h1 {
        font-size: 3em;
        margin-bottom: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        color: #fff;
    }

    h2 {
        font-size: 2em;
        margin-top: 30px;
        margin-bottom: 20px;
        color: #ffe082;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    p {
        font-size: 1.2em;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .features {
        text-align: left;
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .features ul {
        padding-left: 20px;
    }

    .features ul li {
        font-size: 1.1em;
        margin-bottom: 10px;
        position: relative;
        color: #fff;
    }

    .features ul li:before {
        content: '✔';
        color: #ffe082;
        margin-right: 10px;
        position: absolute;
        left: -20px;
        top: 0;
    }

    .action-buttons {
        margin-top: 40px;
    }

    .btn {
        padding: 15px 30px;
        text-decoration: none;
        border-radius: 50px;
        font-size: 1.2em;
        transition: all 0.3s ease;
        margin: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        border: 2px solid transparent;
        font-weight: bold;
    }

    .btn:hover {
        background: rgba(255, 255, 255, 0.4);
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    .btn-primary {
        background: rgba(0, 123, 255, 0.7);
        border-color: #007bff;
    }

    .btn-primary:hover {
        background: rgba(0, 123, 255, 1);
    }

    .btn-success {
        background: rgba(40, 167, 69, 0.7);
        border-color: #28a745;
    }

    .btn-success:hover {
        background: rgba(40, 167, 69, 1);
    }

    </style>
@endsection
