@extends('mainpage')
@section('content')
<div class="container-fluid bgstory py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h2 class="fa-5x text-white pt-5">
                    Kitchen's Story
                </h2>
                <h6 class="text-white">
                    this is how our kitchen evolved in new digital era
                </h6>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5 bggray2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="fa-2x text-black fw-bolder">
                    Meet our <span class="txtorang">team</span>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col m-3 bg-white shadow p-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{url('images/team/1.jpg')}}"class="rounded-circle w-75">
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-black">
                            Sophia<br>
                            <span class="text-secondary">CEO & Founder</span>
                        </h4>
                    </div>
                    <div class="col-md-2">
                        <div class="p-4"><a href="" class="text-decoration-none"><i class="fa fa-plus-circle"></i> </a> </div>
                    </div>
                </div>
            </div>
            <div class="col m-3 bg-white shadow  p-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{url('images/team/2.jpg')}}"class="rounded-circle w-75">
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-black">
                            Benjamin W.<br>
                            <span class="text-secondary">Restaurant Manager</span>
                        </h4>
                    </div>
                    <div class="col-md-2">
                        <div class="p-4"><a href="" class="text-decoration-none"><i class="fa fa-plus-circle"></i> </a> </div>
                    </div>
                </div>
            </div>
            <div class="col m-3 bg-white shadow p-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{url('images/team/3.jpg')}}"class="rounded-circle w-75">
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-black">
                            Muchen Jack<br>
                            <span class="text-secondary">Senior Chef</span>
                        </h4>
                    </div>
                    <div class="col-md-2">
                        <div class="p-4"><a href="" class="text-decoration-none"><i class="fa fa-plus-circle"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-7 col-11 mx-auto text-center">
            <div class="row">
                <h3 class="fa-3x fw-bolder">
                    Customer love,<span class="txtorang">Little Fashion</span>
                </h3>
            </div>
            <div class="row pb-5">
                <div class="swiper swiper2 p-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-4">
                            <div class="fa fa-quote-left txtorang text-start">
                                <div class="text-secondary mt-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at eius ex impedit laboriosam ratione voluptatibus! Accusantium cum debitis eaque fugiat, hic illo ipsam iusto possimus qui reiciendis temporibus voluptates!
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <img src="{{url('images/author/1.jpg')}}"class="rounded-circle w-25">
                                    <span class="text-secondary">
                                        George, Digital Art Fashion
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="fa fa-quote-left txtorang text-start">
                                <div class="text-secondary mt-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at eius ex impedit laboriosam ratione voluptatibus! Accusantium cum debitis eaque fugiat, hic illo ipsam iusto possimus qui reiciendis temporibus voluptates!
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <img src="{{url('images/author/2.jpg')}}"class="rounded-circle w-25">
                                    <span class="text-secondary">
                                        Sander, Zoom Fashion Idea
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="fa fa-quote-left txtorang text-start">
                                <div class="text-secondary mt-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at eius ex impedit laboriosam ratione voluptatibus! Accusantium cum debitis eaque fugiat, hic illo ipsam iusto possimus qui reiciendis temporibus voluptates!
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <img src="{{url('images/author/1.jpg')}}"class="rounded-circle w-25">
                                    <span class="text-secondary">
                                        Marie, Art Fashion Design
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
