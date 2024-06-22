<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar ke Giwigewi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style untuk latar belakang gambar */
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* Style untuk form login */
        .login-container-form {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 1);
            /* Opacity */
            height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            left: 30%;
            padding: 30px;
            border-radius: 60px 0 0 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            outline: 20px solid #048D5E;
            
        }
        
        .login-container {
            display: flex;
            align-items: center;
            width: 100%;
            position: relative;
            height: 100vh;
            justify-content: space-between;
        }
        
        .login-container .background {
            height: 100%;
        }
        
        /* Style untuk tombol login */
        .btn-login {
            background-color: orange;
            border: none;
        }
        
        .btn-login:hover {
            background-color: darkorange;
        }
        
        /* grid untuk formgroup */
        .formtag {
            display: grid;
            grid-template-columns: 100px 400px auto;
            gap: 10px;
            padding: 10px;
        }
        
        .start-col-2 {
            grid-column-start: 2;
            /* Memulai dari kolom 2 */
        }
    </style>
</head>

<body>
    <div class="login-container">
        <img class="background" src="{{ asset('img/Register.png') }}">
        <div class="login-container-form p-5 mx-0">
            <form method="POST" class="w-50">
                <h1 class="text-dark">Register</h1>
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
                        <label for="name" class="form-label">Username</label>
                    </div>
                    <div class="p-3 w-100 col">
                        <input id="name" type="name" value="{{old('username')}}" class="form-control" name="name" required>
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
                    <button type="submit" class="btn btn-lg btn-login w-100">REGISTER</button>
                </div>
                <div class="mb-3">
                    <p class="text-center text-body-secondary">Sudah punya akun? <a class="text-primary" href="/login">Login di sini</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>