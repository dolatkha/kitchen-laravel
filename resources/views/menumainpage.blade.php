<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{url('css/swiper-bundle.min.css')}}">
    <script language="JavaScript" type="text/javascript" src="{{url('js/swiper-bundle.min.js')}}"></script>
    <script language="JavaScript" type="text/javascript" src="{{url('js/swiper-bundle.esm.browser.min.js')}}"></script>
    <script language="JavaScript" type="text/javascript" src="{{url('js/jquery.js')}}"></script>
    <script language="JavaScript" type="text/javascript" src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <title>Crispy Kitchen</title>
</head>
<body>
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row header">
                <div class="col-md-2 col-5">
                    <h3 class="text-secondary fw-bolder">
                        Crispy
                        <span class="txtorang">Kitchen</span>
                    </h3>
                </div>
                <div class="col-md-7 col-1 text-center">
                    <button class="text-dark d-md-none navbtn" onclick="showmenu()"><i class="fa fa-bars"></i> </button>
                    <div class="d-none d-md-block"  id="menuid">
                        <ul class="menu">
                            <li><a href="{{url('home')}}" {{ request()->is('*home*') ? 'class=active' : '' }}>Home</a> </li>
                            <li><a href="{{url('story')}}" {{ request()->is('*story*') ? 'class=active' : '' }}>Story</a> </li>
                            <li><a href="{{url('menu')}}" {{ request()->is('*menu*') ? 'class=active' : '' }}>Menu</a> </li>
                            <li><a href="{{url('ourupdates')}}" {{ request()->is('*ourupdates*') ? 'class=active' : '' }}>Our Updates</a> </li>
                            <li><a href="{{url('contact')}}" {{ request()->is('*contact*') ? 'class=active' : '' }}>Contact</a> </li>
                            <li><a href="{{url('admin')}}" {{ request()->is('*admin*') ? 'class=active' : '' }}>Admin</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-4 topheader">
                    <i class="fa fa-user fa-2x me-4"></i>
                    <i class="fa fa-shopping-basket fa-2x"></i>
                </div>
                <div class="col-md-1">
                    <a href="{{url('/reservation')}}" class="btn btnreserv">Reservation</a>
                </div>
            </div>
        </div>
    </div>
    <span>
        @yield('content')
    </span>
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row">
                <div class="col m-4 text-nowrap">
                    <h3 class="fa-2x  mt-5 mb-4">
                        <span class="text-white">Crispy Kitchen</span>
                    </h3>
                    <div class="text-secondary">
                        Monday - Friday
                        <br>
                        10:00 AM - 08:00 PM
                        <br>
                        Tel: 010-02-0340
                    </div>
                    <div>
                        <div class="text-white pt-5">
                            Location
                        </div>
                        <div class="text-secondary">
                            121 Einstein Loop N, Bronx, NY 10475, United States
                        </div>
                    </div>
                </div>
                <div class="col m-4">
                    <h3 class="text-white fa-2x  mt-5 mb-4">
                        Sitemap
                    </h3>
                    <ul class="footer">
                        <li><a href="index.php" class="text-decoration-none text-secondary">Story</a> </li>
                        <li><a href="index.php" class="text-decoration-none text-secondary">Privacy policy</a> </li>
                        <li><a href="index.php" class="text-decoration-none text-secondary">Contact</a> </li>
                        <li><a href="index.php" class="text-decoration-none text-secondary">Products</a> </li>
                        <li><a href="index.php" class="text-decoration-none text-secondary">FAQs</a> </li>
                    </ul>
                </div>
                <div class="col m-4">
                    <h3 class="text-white fa-2x mt-5 mb-4">
                        Social
                    </h3>
                    <a href=""class="text-decoration-none me-3"> <i class="fab fa-youtube text-secondary fa-2x"></i></a>
                    <a href=""class="text-decoration-none me-3"><i class="fab fa-whatsapp text-secondary fa-2x"></i></a>
                    <a href=""class="text-decoration-none me-3"><i class="fab fa-instagram-square text-secondary fa-2x"></i></a>
                    <a href=""class="text-decoration-none me-3"><i class="fab fa-skype text-secondary fa-2x"></i></a>
                    <div class="text-secondary py-5">
                        Copyright © 2022 M.D.L
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script language="JavaScript" type="text/javascript" src="js/my-js.js"></script>
<script>
    showmenu=function (){
        document.getElementById('menuid').classList.toggle('d-none');
    }
</script>
</body>
</html>
