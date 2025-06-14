@extends('template')

@section('content')
    <title>5026231231 Sinta Dewi Rahmawati</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f5f5f5;
        }

        .counter {
            background-color: #dff0d8;
            color: #3c763d;
            border-radius: 5px;
            padding: 20px;
            font-size: 20px;
            width: fit-content;
            margin: auto;
            border: 1px solid #c3e6cb;
            position: relative;
        }

    </style>
<body>

    <div class="counter m-2">
        Anda Pengunjung ke: <strong>{{ $jumlah }}</strong>
    </div>

@endsection
