<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Halaman User</h1>
        <h4>{{ $id }} | {{ $name }}</h4>
        <p>Menampilkan profil pengguna (route param).</p>
        <div class="routes">/user/{id}/name/{name}</div>
        <button onclick="window.location.href='/'">Kembali ke Home</button>
    </div>
</body>
</html>