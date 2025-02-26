<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title><?= $title ?></title> --}}
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h2>Halaman Home</h2>
        <p>Menampilkan halaman awal website.</p>
        <button  onclick="window.location.href='/category'">Halaman Products</button> |
        <button  onclick="window.location.href='/user/{13}/name/{Ghoffar Abdul Jafar}'">Halaman user</button> |
        <button  onclick="window.location.href='/sales'">Halaman Sales</button>
    </div>
</body>
</html>