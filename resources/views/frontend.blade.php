@extends('template')

@section('content')
<head>
    <meta charset="UTF-8">
    <title>Kumpulan Link Frontend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #e0ecff, #f9fafe);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .btn-custom {
            background-color: #4e73df;
            border: none;
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .btn-custom:hover {
            background-color: #2e59d9;
            transform: scale(1.03);
        }

        .card-header {
            background-color: #4e73df;
            color: white;
            font-weight: bold;
        }

        .page-card {
            transition: transform 0.2s ease;
        }

        .page-card:hover {
            transform: translateY(-5px);
        }

        .icon {
            font-size: 1.2rem;
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Kumpulan Link Frontend</h1>
        <p class="mt-3">Tugas Frontend Pertemuan 1 - ETS</p>
    </div>

    <div class="card mb-5 shadow-sm">
        <div class="card-header text-center">
            - Sinta Dewi Rahmawati | 5026231231 -
        </div>
        <div class="card-body text-center">
            <p><strong>Kelas:</strong> Pemrograman Web - C</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @php
            $pages = [
                'pertama' => ['icon' => 'bi-file-earmark-code', 'desc' => 'Pertemuan pertama latihan awal membuat HTML'],
                'tugas1' => ['icon' => 'bi-layout-text-window-reverse', 'desc' => 'Penugasan membuat layout Bootstrap dari soal'],
                'bootstrap1' => ['icon' => 'bi-bootstrap', 'desc' => 'Latihan dasar menggunakan Bootstrap 1'],
                'bootstrap2' => ['icon' => 'bi-bootstrap-fill', 'desc' => 'Latihan lanjutan Bootstrap 2'],
                'js1' => ['icon' => 'bi-calculator', 'desc' => 'Membuat fungsi perhitungan dengan JavaScript'],
                'js2' => ['icon' => 'bi-shield-check', 'desc' => 'Form validation dengan JavaScript'],
                'danantara' => ['icon' => 'bi-house-door', 'desc' => 'Memperbarui website Danantara'],
                'linktree' => ['icon' => 'bi-link-45deg', 'desc' => 'Cloning Linktree menggunakan Bootstrap'],
                'ets' => ['icon' => 'bi-building', 'desc' => 'ETS dengan topik Company Profile'],
            ];
        @endphp

        @foreach ($pages as $page => $info)
            <div class="col">
                <div class="card page-card shadow-sm h-100">
                    <div class="card-body text-center">
                        <a href="{{ url($page) }}" class="btn btn-custom w-100 mb-2 text-white text-capitalize">
                            <i class="icon {{ $info['icon'] }}"></i>{{ $page }}
                        </a>
                        <small class="text-muted d-block mt-1">{{ $info['desc'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
