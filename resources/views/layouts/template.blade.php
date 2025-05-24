<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('images/logo.png')}}">
        <title>Lux Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('template/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/all.css') }}"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ route('landing') }}"><h5>LUX HOTEL</h5></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">

                            <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#facilities">Facilities</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                            @guest
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i> Login</a></li>
                            @else
                                <li class="nav-item submenu dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fas fa-user"></i> {{ Auth::user()->name }}
                                    </a>

                                    <ul class="dropdown-menu">
                                        @if (Auth::user()->role == "customer")

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('customer.transactions') }}"><i class="fas fa-exchange-alt"></i>
                                                    List Transactions
                                                </a>
                                            </li>
                                        @endif

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        @yield('content')

        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>
                                Lux Group adalah perusahaan multinasional yang bergerak di bidang pariwisata dan hiburan, didirikan pada tahun 1970 oleh Joko Salim. Sejak awal berdirinya, Lux Group berkomitmen untuk menghadirkan layanan dan pengalaman terbaik dalam industri hospitality, mulai dari penginapan, rekreasi, hingga layanan perjalanan kelas dunia.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="footer_title">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Telukjambe Timur, Karawang, Jawa Barat 41361</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@lux.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 62 0812-1234-5678</p>
                        <p><i class="fas fa-print mr-3"></i> + 62 0812-1344-9827</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="{{ asset('template/image/instagram/Image-01.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-02.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-03.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-04.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-05.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-06.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-07.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('template/image/instagram/Image-08.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('template/js/popper.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('template/js/mail-script.js') }}"></script>
        <script src="{{ asset('template/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('template/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
        <script src="{{ asset('template/js/mail-script.js') }}"></script>
        <script src="{{ asset('template/js/stellar.js') }}"></script>
        <script src="{{ asset('template/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('template/js/custom.js') }}"></script>
        @yield('script')
        <script>
            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 3000); // <-- time in milliseconds
        </script>
    </body>
</html>
