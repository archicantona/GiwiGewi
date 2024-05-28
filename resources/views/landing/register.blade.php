<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <!-- <div style="margin : 0"> -->
        <img class="background" src="{{ asset('img/Register.png') }}">
        <div class="login-container-form">
            <div>
                <h2 class="text">Register</h2>

                <form method="POST">
                    @csrf
                    <div class="form-group formtag">
                        <label for="email">Email</label>
                        <input id="email" type="email" value="{{old('email')}}" class="form-control" name="email" required autofocus>
                    </div>
                    <div class="form-group formtag">
                        <label for="name">Username</label>
                        <input id="name" type="name" value="{{old('username')}}" class="form-control" name="name" required>
                    </div>
                    <div class="form-group formtag">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                    <div class="formtag">
                        <button type="submit" class="btn btn-login btn-block start-col-2">Submit</button>
                    </div>
                </form>
                <div class="formtag">
                    <p class="text-center mt-3 start-col-2">Sudah punya akun? <a href="/login">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>