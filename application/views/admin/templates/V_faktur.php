<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktur Pembayaran</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            float: left;
        }
        .logo img {
            width: 100px;
            height: auto;
        }
        .invoice-details {
            float: right;
            text-align: right;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .total {
            float: right;
            margin-top: 20px;
        }
        #downloadBtn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <div class="invoice-details">
                <h1>Faktur Pembayaran</h1>
                <p>Nomor Faktur: INV12345</p>
                <p>Tanggal: 24 Juli 2023</p>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Barang 1</td>
                    <td>2</td>
                    <td>Rp 100.000</td>
                </tr>
                <tr>
                    <td>Barang 2</td>
                    <td>3</td>
                    <td>Rp 150.000</td>
                </tr>
                <tr>
                    <td>Barang 3</td>
                    <td>1</td>
                    <td>Rp 50.000</td>
                </tr>
            </tbody>
        </table>
        <div class="total">
            <p>Total: Rp 300.000</p>
        </div>
        <button id="downloadBtn">Unduh Faktur</button>
    </div>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function () {
            const element = document.querySelector('.container');
            html2pdf().from(element).save('faktur.pdf');
        });
    </script>
</body>
</html>
