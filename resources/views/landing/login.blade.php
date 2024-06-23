<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giwigewi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/entry.css') }}">
</head>

<body>
    <div class="login-container">
        <img class="background" src="{{ asset('img/Login.png') }}">
        <div class="login-container-form p-5 mx-0">
            <form method="POST" class="w-50">
                <h1 class="text-dark">Login</h1>
                @csrf 
                <div class="row gx-5">
                    <div class="p-3 w-100 col-3">
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="p-3 w-100 col">
                        <input type="email" class="form-control w-100" id="email" value="{{old('email')}}" name="email" required autofocus>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="p-3 w-100 col-3">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="p-3 w-100 col">
                        <input type="password" class="form-control w-100" id="password" name="password" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-lg btn-login w-100">LOGIN</button>
                </div>
                <div class="mb-3">
                    <p class="text-center text-body-secondary">Belum punya akun? <a class="text-primary" href="/register">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>