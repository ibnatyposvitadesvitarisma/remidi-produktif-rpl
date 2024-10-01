@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Stok Gudang</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Center Content */
        center {
            display: block;
            text-align: center;
            margin: 20px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #333;
            color: #fff;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            font-size: 1rem;
        }

        td {
            font-size: 0.9rem;
        }

        /* Header Styles */
        h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 1.5rem;
            color: #555;
            margin-bottom: 10px;
        }

        p {
            font-size: 1rem;
            color: #666;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <center>
        <h2>PT Mafia Rokok - Laporan Stok Gudang</h2>
        <h3>Agustus 2023</h3>
        <p>Alamat: Jalan Raya Mangunharjo No. 123, Mangkang</p>
        <p>Nomor Telepon: (+62) 895360421148</p>
        <p>Email: info@mafiarokok.com, Website: www.mafiarokok.com</p>
    </center>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Kode Produk</th>
                <th>Jumlah Awal Bulan</th>
                <th>Pemasukan (Unit)</th>
                <th>Pengeluaran (Unit)</th>
                <th>Jumlah Akhir Bulan</th>
                <th>Harga Satuan (Rp)</th>
                <th>Nilai Stok Akhir (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sampoerna</td>
                <td>rokok-001</td>
                <td>150</td>
                <td>50</td>
                <td>30</td>
                <td>170</td>
                <td>Rp2,500,000</td>
                <td>Rp425,000,000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sukun</td>
                <td>rokok-002</td>
                <td>200</td>
                <td>60</td>
                <td>40</td>
                <td>220</td>
                <td>Rp5,500,000</td>
                <td>Rp1,100,000,000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Signature</td>
                <td>rokok-003</td>
                <td>100</td>
                <td>60</td>
                <td>50</td>
                <td>110</td>
                <td>Rp2,000,000</td>
                <td>Rp220,000,000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Surya 16</td>
                <td>rokok-004</td>
                <td>80</td>
                <td>50</td>
                <td>20</td>
                <td>110</td>
                <td>Rp3,000,000</td>
                <td>Rp330,000,000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Camel</td>
                <td>rokok-005</td>
                <td>70</td>
                <td>40</td>
                <td>30</td>
                <td>80</td>
                <td>Rp2,200,000</td>
                <td>Rp176,000,000</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
@endsection