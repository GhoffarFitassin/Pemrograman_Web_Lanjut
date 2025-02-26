<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Halaman Sales</h1>
        <p>Menampilkan halaman transaksi POS.</p>
        <table>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Kopi</td>
                <td>2</td>
                <td>Rp 15.000</td>
                <td>Rp 30.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Teh</td>
                <td>3</td>
                <td>Rp 10.000</td>
                <td>Rp 30.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Susu</td>
                <td>1</td>
                <td>Rp 20.000</td>
                <td>Rp 20.000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Roti</td>
                <td>4</td>
                <td>Rp 8.000</td>
                <td>Rp 32.000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Air Mineral</td>
                <td>5</td>
                <td>Rp 5.000</td>
                <td>Rp 25.000</td>
            </tr>
        </table>
        <button onclick="window.location.href='/'">Kembali ke Home</button>
    </div>
</body>
</html>