<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi User</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
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
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .transaction-item {
            display: flex;
            justify-content: space-between;
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

        .transaction-item .user-details {

            display: flex;
            flex-direction: column;
        }


        .transaction-item .price {
            color: #333;
            font-weight: bold;
        }

        .transaction-item .btn {
            background-color: darkorange;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .transaction-item .btn:hover {
            color: grey;
            background-color: orange;
        }

        .transaction-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="main-container">
        <div class="button-container">
            <a href="/userinfo" class="button first-button">Informasi Akun</a>
            <a href="/riwayattransaksi" class="button second-button" style="color: black;">Riwayat Pesanan</a>
        </div>
        <div class="transaction-container">

            <h2>INFORMASI AKUN</h2>
            <div class="transaction-item">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    Profil Berhasil Di Update
                </div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>

        </div>
    </div>

    @include('footer')


</body>

</html>