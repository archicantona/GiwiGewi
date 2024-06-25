<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giwigewi</title>
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
                    <a href="/about" class="button-menu-about first-button">Tentang Kami</a>
                    <a href="/contact" class="button-menu-about second-button">Kontak Informasi</a>
                </div>
            </div>
            
            <div class="col mx-auto">
                <div class="card card-about-us p-4">
                    <div class="card-body">
                        <h1 class="contact-info-title text-secondary mb-4">TENTANG GIWIGEWI</h1>
                        <div class="row text-start">
                            <div class="my-4 col-12 mx-2">
                                <p>Home Industri Giwigewi ini mulai mengolah buah jeruk kalamansi untuk dijadikan sirup yang berbentuk Squash mulai dari tahun 2012.<br>
                                    Keunggulan produk ini selain mempunyai citarasa harum dan khas sekaligus sirup kalamansi ini juga sangat bermanfaat bagi
                                    kesehatan tubuh bila dikonsumsi secara teratur karena kaya Vitamin C.
                                </p>
                            </div>
                            <div class="my-4 col-12 mx-2">
                                <strong>Visi</strong>
                                <p>Menjadi perusahaan penghasil Kalamansi squash yang bermutu dari olahan buah jeruk kalamansi dan mampu menguasai pasar nasional.</p>
                            </div>
                            <div class="my-4 col-6">
                                <strong>Misi</strong>
                                <ul>
                                    <li>Menggunakan bahan baku yang berkualitas.</li>
                                    <li>Desain kemasan dan penampilan produk semenarik mungkin.</li>
                                    <li>Marketing dilakukan secara maksimal dalam skala kecil dan skala besar.</li>
                                    <li>Meningkatkan kesejahteraan masyarakat dan menciptakan lingkungan yang sehat.</li>
                                </ul>
                            </div>
                            <div class="my-4 col-6">
                                <strong>BUDAYA</strong>
                                <ul>
                                    <li>Menyihatkan</li>
                                    <li>Mensejahterakan</li>
                                    <li>Membahagiakan</li>
                                    <li>Kearifan Lokal</li>
                                    <li>Humanis</li>
                                </ul>
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