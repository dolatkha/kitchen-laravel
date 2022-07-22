@extends('adminmainpage')
@section('content')
    <div class="container-fluid py-5 bgreserv">
        <div class="row">
            <div class="col-md-10 mx-auto py-5">
                <h3 class="fs-3">
                    Admin panel:
                </h3>
                <h5>
                    Please choose one
                </h5>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-10 mx-auto">
                <div class="bg-light shadow col-md-6">
                    <ul class="menu"><span class="fs-4">Product-></span>
                        <li>
                            <a href="{{url('/product/add')}}" class="btn btn-outline-warning my-3">
                                Add to Product
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/product/list')}}" class="btn btn-outline-warning my-3">
                                List Product
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-light shadow col-md-6">
                    <ul class="menu"><span class="fs-4">Category-></span>
                        <li>
                            <a href="{{url('/categories/create')}}" class="btn btn-outline-warning my-3">
                                Add to Category
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/categories')}}" class="btn btn-outline-warning my-3">
                                List Category
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-light shadow col-md-6">
                    <ul class="menu"><span class="fs-4">Category-></span>
                        <li>
                            <a href="{{url('/reservation/list')}}" class="btn btn-outline-warning my-3">
                                List Reservation
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
