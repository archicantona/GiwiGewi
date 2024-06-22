<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .navbar-nav .nav-link {
            color: white;
            font-family: 'Lato', sans-serif;
            font-size: 18px;
        }

        .main-container {
            display: flex;
        }


        .button-container {
            position: relative;
            display: inline-block;
        }

        .button {
            display: block;
            width: 200px;
            padding: 10px;
            border: none;
            text-align: center;
            font-size: 16px;
            color: white;
            cursor: pointer;
            text-decoration: none;
            /* Remove underline */
        }

        .first-button {
            background-color: #fb931d;
            position: relative;
            z-index: 2;
        }

        .second-button {
            background-color: aliceblue;
            position: relative;
            z-index: 1;
            color: black;
            /* Ensure text color is black */
        }

        .first-button:hover {
            background-color: #e07b00;
            /* Darker shade for hover */
        }

        .second-button:hover {
            background-color: #d6e9ff;
            /* Slightly darker shade for hover */
        }

        .transaction-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 1000px;
            margin: auto;
            padding: 60px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .transaction-item {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            border-bottom: 1px solid #ddd;
        }

        .transaction-item:last-child {
            border-bottom: none;
        }

        .transaction-item img {
            width: 50px;
            height: auto;
            border-radius: 5px;
            margin-right: 10px;
        }

        .transaction-item h4,
        .transaction-item p {
            margin: 0;
        }

        .transaction-item .details {
            display: flex;
            flex-direction: column;
        }

        .transaction-item .price {
            color: #333;
            font-weight: bold;
        }

        .transaction-item .btn {
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .transaction-item .btn:hover {
            background-color: #e0a800;
        }

        .transaction-container h2 {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 300px;
            display: inline-block;
        }

        .contact-card img {
            width: 50px;
            height: auto;
            margin-bottom: 10px;
        }

        .contact-card h3 {
            margin: 0;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .contact-card p {
            margin: 0;
            margin-bottom: 10px;
            color: #666;
            font-size: 17px;
        }

        .contact-card a {
            text-decoration: none;
            background-color: #fb931d;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .contact-card a:hover {
            background-color: #e07b00;
        }

        .details {
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #fb931d;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #e07b00;
        }
    </style>
</head>

<body>

    @include('navbar')

    <div class="main-container">
        <div class="button-container">
            <a href="/about" class="button second-button">Tentang Kami</a>
            <a href="/contact" class="button first-button" style="color: white;">Hubungi Kami</a>
        </div>
        <div class="transaction-container">
            <h2>HUBUNGI KAMI</h2>
            <div class="transaction">

                <div class="details">

                    <div class="contact-card">
                        <img src="{{ asset('img/whatsapp.png') }}" alt="Whatsapp Icon">
                        <h3>Whatsapp Business</h3>
                        <p>Senin - Jumat 08.00 - 20.00 WIB<br>Sabtu - Minggu 09.00 - 21.00 WIB</p>
                        <a href="https://wa.me/6282269149224">Contact Now</a>
                    </div>
                    <div class="contact-card" style="width: 400px;">
                        <img src="{{ asset('img/mail.png') }}" alt="Mail">
                        <h3>Pesan & Kesan</h3>


                        @if (session('success'))
                        <div>{{ session('success') }}</div>
                        @endif

                        <form action="/contact" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" id="name" name="name" placeholder="Nama" required>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                            <textarea id="message" name="message" rows="4" placeholder="Pesan" required></textarea>
                            <button type="submit">Kirim</button>
                        </form>


                    </div>
                </div>



            </div>


        </div>
    </div>
    @include('footer')



</body>


</html>