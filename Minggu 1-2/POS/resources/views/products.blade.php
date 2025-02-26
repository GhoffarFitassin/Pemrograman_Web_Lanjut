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
        <h2>Halaman Products</h2>
        <p>Menampilkan daftar produk (route prefix).</p>
        <button onclick="window.location.href='category/food-beverage'">/category/food-beverage</button>
        <button onclick="window.location.href='category/beauty-health'">/category/beauty-health</button>
        <button onclick="window.location.href='category/home-care'">/category/home-care</button>
        <button onclick="window.location.href='category/baby-kid'">/category/baby-kid</button>
        <button onclick="window.location.href='/'">Kembali ke Home</button>
    </div>
</body>
</html>