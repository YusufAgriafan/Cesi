<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('tittle')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href=" {{ asset('/img/favicon.ico ') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href=" {{ asset('/lib/animate/animate.min.css ') }}" rel="stylesheet">
    <link href=" {{ asset('/lib/owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" {{ asset('/css/bootstrap.min.css ') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href=" {{ asset('/css/style.css ') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('/music/style.css ') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    @yield('css')

</head>

<body>

    <style>
        .page-header {
            padding-top: 12rem;
            padding-bottom: 6rem;
            background: url("{{ asset('img/' . trim($__env->yieldContent('header')) . '.jpg') }}") top left no-repeat;
            background-size: cover;
        }
    </style>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            {{-- <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 9.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>info@example.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</small>
            </div> --}}
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('index') }}" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">Pesi</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>

                    <div class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle @yield('nav_fitur')" data-bs-toggle="dropdown ">Fitur</a>
                        <div class="dropdown-menu border-light m-0">

                            @auth
                                <a href="{{ route('permainan') }}" class="dropdown-item">Permainan</a>
                                <a href="{{ route('kuis') }}" class="dropdown-item">Kuis</a>
                                <a href="/chatify" class="dropdown-item">Chat</a>
                            @endauth

                            <a href="{{ route('informasi') }}" class="dropdown-item">Informasi</a>
                            <a href="{{ route('team') }}" class="dropdown-item">Team Member</a>
                            <a href="{{ route('masukan') }}" class="dropdown-item">Masukan</a>
                            {{-- <a href="404.html" class="dropdown-item">404 Page</a> --}}
                        </div>
                    </div>

                    @guest
                    <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                    <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                    @endguest
                    <a href="{{ route('tes') }}" class="nav-item nav-link @yield('nav_tes')">Tes</a>
                    @auth
                        <a href="{{ route('prediksi') }}" class="nav-item nav-link @yield('nav_prediksi')">Prediksi</a>
                        <a href="{{ route('profile.show') }}" class="nav-item nav-link @yield('nav_profil')">Profil</a>
                        <a href="{{ route('logout') }}" class="nav-item nav-link" id="logout-link">Logout</a>
                    @endauth

                        <script>
                        document.getElementById('logout-link').addEventListener('click', function(event) {
                            event.preventDefault();
                            
                            fetch("{{ route('logout') }}", {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                            }).then(response => {
                                if (response.ok) {
                                    // Redirect to the login page or any other page after successful logout
                                    window.location.href = '/';
                                }
                            }).catch(error => {
                                console.error('Error:', error);
                            });
                        });
                        </script>

                    {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">@yield('page') <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fa fa-play" aria-hidden="true"></i>
              </button>
              
            </h1> 
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        @if (Route::currentRouteName() !== 'prediksi' && Route::currentRouteName() !== 'tes')
                            <li class="breadcrumb-item">Fitur</li>
                        @endif
                    <li class="breadcrumb-item active" aria-current="page">@yield('page')</li>
                </ol>
                
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">Musik</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="main">
              <div class="wrapper">
                  <div class="top-bar">
                    <i class="material-icons">expand_more</i>
                    <span>Now Playing</span>
                    <i class="material-icons">more_horiz</i>
                  </div>
                  <div class="img-area">
                    <img src="" alt="">
                  </div>
                  <div class="song-details">
                    <p class="name"></p>
                    <p class="artist"></p>
                  </div>
                  <div class="progress-area">
                    <div class="progress-bar">
                      <audio id="main-audio" src=""></audio>
                    </div>
                    <div class="song-timer">
                      <span class="current-time">0:00</span>
                      <span class="max-duration">0:00</span>
                    </div>
                  </div>
                  <div class="controls">
                    <i id="repeat-plist" class="material-icons" title="Playlist looped">repeat</i>
                    <i id="prev" class="material-icons">skip_previous</i>
                    <div class="play-pause">
                      <i class="material-icons play">play_arrow</i>
                    </div>
                    <i id="next" class="material-icons">skip_next</i>
                    <i id="more-music" class="material-icons">queue_music</i>
                  </div>
                  <div class="music-list">
                    <div class="header">
                      <div class="row">
                        <i class= "list material-icons">queue_music</i>
                        <span>Music list</span>
                      </div>
                      <i id="close" class="material-icons">close</i>
                    </div>
                    <ul>
                      <!-- here li list are coming from js -->
                    </ul>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <script src=" {{ asset('/music/js/music-list.js ') }}"></script>
      <script src="{{ asset('/music/js/script.js ') }}"></script>
      

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Informasi Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Ambarawa No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 81234567890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>pesi.teice@gmail.com</p>
                    {{-- <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Fitur - Fitur</h4>
                    <a class="btn btn-link" href="{{ route('prediksi') }}">Prediksi Depresi</a>
                    <a class="btn btn-link" href="{{ route('permainan') }}">Permainan</a>
                    <a class="btn btn-link" href="{{ route('informasi') }}">Informasi</a>
                    <a class="btn btn-link" href="{{ route('kuis') }}">Kuis</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Support Us</h4>
                    <a class="btn btn-link" href="{{ route('team') }}">Tim Pengembang</a>
                    <a class="btn btn-link" href="{{ route('masukan') }}">Saran dan Masukan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Subscribe</h4>
                    <p>Subscribe untuk menerima update terbaru.</p>
                    <div class="position-relative w-100">
                        <form action="{{ route('subscribe')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="email" placeholder="Email" name="email" id="email" >
                            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; PESI TEICE, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src=" {{ asset('/lib/wow/wow.min.js ') }}"></script>
        <script src=" {{ asset('/lib/easing/easing.min.js ') }}"></script>
        <script src=" {{ asset('/lib/waypoints/waypoints.min.js ') }}"></script>
        <script src=" {{ asset('/lib/owlcarousel/owl.carousel.min.js ') }}"></script>
        <script src=" {{ asset('/lib/counterup/counterup.min.js ') }}"></script>
    
        <!-- Template Javascript -->
        <script src=" {{ asset('/js/main.js ') }}"></script>
        {{-- @yield('js') --}}
    </body>
    
    </html>