@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container Styles */
        .container {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 600px;
        }

        /* Header Styles */
        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 1.5rem;
            color: #555;
            margin: 5px 0;
        }

        /* Image Styles */
        img {
            border-radius: 8px;
            margin-top: 20px;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kharismatul Aula 23</h1>
        <h3>SMK Texmaco Semarang</h3>
        <h3>JL Kaliwungu Raya No 04</h3>
        <h3>Saya Suka Mingyu</h3>
        <img src="assets/poto/work.jpg" alt="work Image">
    </div>
    <div class="container">
        <h1>Ibnaty Alya 23</h1>
        <h3>SMK Texmaco Semarang</h3>
        <h3>JL Mangkang Raya</h3>
        <h3>Saya Suka bacoh</h3>
        <img src="assets/poto/work.jpg" alt="work Image">
    </div>
    <div class="container">
        <h1>Desvita Putri 23</h1>
        <h3>SMK Texmaco Semarang</h3>
        <h3>JL Raya Beringin</h3>
        <h3>Saya Suka suka</h3>
        <img src="assets/poto/work.jpg" alt="work Image">
    </div>
</body>
</html>

@endsection