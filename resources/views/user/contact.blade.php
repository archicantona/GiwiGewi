<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
</head>

<body style="background-color: #f3f3f3">
    
    @include('navbar')
    
    <div class="container-fluid justify-content-center text-center p-5 my-5">


        <div class="row">
            <div class="col me-auto">
                <div class="mb-3">
                    <a href="/about" class="button-menu-about second-button">Tentang Kami</a>
                    <a href="/contact" class="button-menu-about first-button">Hubungi Kami</a>
                </div>
            </div>
            
            <div class="col-auto mx-auto">
                <div class="card card-contact-us w-100 p-4">
                    <div class="card-body">
                        <h1 class="contact-info-title text-secondary mb-4">KONTAK INFORMASI</h1>
                        <div class="row">
                            <div class="col mx-2">
                                <div class="card card-contact-us w-100 mt-2 mb-2">
                                    <div class="card-body p-5">
                                        <img class="contact-img mb-4" src="{{ asset('img/whatsapp.png') }}" alt="Whatsapp Icon">
                                        <h3 class="mb-4">Whatsapp Business</h3>
                                        <p>Senin - Jumat 08:00 - 20:00 WIB<br>Sabtu - Minggu 09:00 - 21:00 WIB</p>
                                        <a class="btn w-100" href="https://wa.me/6282269149224">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mx-2">
                                <div class="card card-contact-us w-100 mt-2 mb-2">
                                    <div class="card-body p-5">
                                        <img class="contact-img mb-4" src="{{ asset('img/mail.png') }}" alt="Mail">
                                        <h3 class="mb-4">Pesan & Kesan</h3>
                                        @if (session('success'))
                                        <div>{{ session('success') }}</div>
                                        @endif
                                        <form action="/contact" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <input class="form-control" type="text" id="name" name="name" placeholder="Nama" required>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Pesan" required></textarea>
                                            </div>
                                            <button class="btn w-100" type="submit">Kirim</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col ms-auto">
            </div>
        </div>  
    </div>
    @include('footer')
    
    
    
</body>

</html>