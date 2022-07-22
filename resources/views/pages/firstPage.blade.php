@extends('mainpage')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <video autoplay muted loop id="myVideo">
                <source src="{{url('video/1.mp4')}}" type="video/mp4">
            </video>
        </div>
        <div class="row">
            <div class="col-md-3 textpos">
                <h1 class="text-white fw-bolder fa-5x">
                    Delicious Steaks
                </h1>
                <h4 class="text-white my-3">
                    4.4/5
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </h4>
                <div class="text-light fs-5">
                    From 1,206+ Customer Reviews
                </div>
            </div>
            <div class="col-md-9 sliderpos">
                <div class="swiper swiper1 p-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{url('images/slide/1.jpg')}}" class="w-100 d-block">
                            <div class="col-md-6 txtslider">
                                <h3 class="text-white fw-bolder fa-2x">
                                    Sausage Pasta <span class="ms-4 bg-light rounded-pill text-warning">$18.25</span>
                                </h3>
                                <h6 class="text-white my-3">
                                    4.2/5
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{url('images/slide/2.jpg')}}" class="w-100 d-block">
                            <div class="col-md-6 txtslider">
                                <h3 class="text-white fw-bolder fa-2x">
                                    Steak <span class="ms-4 p-2 bg-light rounded-pill text-warning">$26.50</span>
                                </h3>
                                <h6 class="text-white my-3">
                                    3.8
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{url('images/slide/3.jpg')}}"
                                 class="w-100 d-block">
                            <div class="col-md-6 txtslider">
                                <h6 class="text-light">
                                    Manhattan, New York
                                </h6>
                                <h3 class="text-white">
                                    Fine Dining Restaurant
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h3 class="fa-3x">
                    Special Menus
                </h3>
            </div>
        </div>
        <div id="card"></div>
        <div class="row my-5" id="productlist">
        </div>
    </div>
    <div class="container-fluid bgpicfix mb-5">
        <div class="row">

        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h3 class="fa-4x">
                    News & Events
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col m-3 text-nowrap position-relative">
                <img src="{{url('images/news/1.jpg')}}" class="img-fluid">
                <div class="textnews">
                    <div class="btn btnfeatured w-25">
                        Featured
                    </div>
                    <div class="text-white fs-4">
                        Healthy lifestyle and happy living tips
                    </div>
                </div>
            </div>
            <div class="col m-3 text-nowrap position-relative">
                <img src="{{url('images/news/2.jpg')}}" class="img-fluid">
                <div class="textnews">
                    <div class="btn btnfeatured w-25">Featured</div>
                    <div class="text-white fs-4">
                        Healthy lifestyle and happy living tips
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m-3 text-nowrap">
                <div class="card">
                    <div class="card-img">
                        <img src="{{url('images/news/3.jpg')}}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div>
                            <span class="bg-info text-white p-1 rounded">
                                Promotions
                            </span>
                            <span class="fw-bold ms-5">
                                8 April 2022
                            </span>
                        </div>
                        <div class="mt-3">
                            <a href="" class="linkhover text-decoration-none text-black fs-5">Is Coconut good for
                                you?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-3 text-nowrap">
                <div class="card">
                    <div class="card-img">
                        <img src="{{url('images/news/4.jpg')}}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <span class="btn-dark text-white p-1 rounded">News</span>
                        <div class="mt-3">
                            <a href="" class="linkhover text-decoration-none text-black fs-5">Salmon Steak Noodle</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-3 text-nowrap">
                <div class="card">
                    <div class="card-img">
                        <img src="{{url('images/news/5.jpg')}}" class="img-fluid">
                    </div>
                    <div class="card-body">
                         <span class="bg-info text-white p-1 rounded">
                                Meeting
                         </span>
                        <span class="fw-bold ms-5">
                                30 April 2022
                        </span>
                        <div class="mt-3">
                            <a href="" class="linkhover text-decoration-none text-black fs-5">Making a healthy salad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
