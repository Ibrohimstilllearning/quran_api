<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/8b969e22b4.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Quran <span class="food">Al-Kariim</span></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 800px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/quran/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Quran</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
     
    <div class="container" style="margin-top:250px;">
        @yield('content')<!--buat ngambil konten diluar index ini/ di index lain-->
    </div>

    <div id="cta">
        <div class="dark-overlay">
            <div class="cloud-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto text-center">
                            <h3 class="display-4">Media <span style="color:orange;">Quran</span></h3>
                            <h5>Informasi Mengenai Ajaran Islam dan <br>Ilmu Al-Qur'an</h5>
                            <h3 style="margin-top: 25px;">CONTACT INFORMATION</h3>
                            <div class="py-3">
                                <i class="fas fa-phone">
                                    <p style="color: green;">Phone <br>
                                        <h5>+62 821-3851-6750</h5>
                                    </p>
                                </i>
                                <i class="fas fa-map-marked-alt">
                                    <p style="color: green;">Address <br>
                                        <h5>JL.Brigjen Ambatunat No.enem</h5>
                                    </p>
                                </i>
                                <i class="fas fa-envelope">
                                    <p style="color: green;">Email <br>
                                        <h5>info@Almasarani.com</h5>
                                    </p>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5 bg-dark text-center text-white">
        <p>
            Copyright&copy;2023 | Al-Quran Al-Kariim
        </p>
    </footer>
</body>
</html>