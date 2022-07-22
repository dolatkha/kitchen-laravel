@extends('adminmainpage')
@section('content')
    <div class="container my-5 ">
        <div class="row">
            <div class="col-12 col-md-12 mx-auto my-3 bgreserv p-5">
                @if($msg)
                    {!! $msg !!}
                @endif
                <div class="col-md-8 shadow">
                    <h3 class="fa-4x">
                        Reserve a table
                    </h3>
                    <form class="form-control" action="
                    @if(isset($reserve))
                    {{url('/reservation/edit/'.$reserve->id)}}
                    @else
                    {{url('/reservation')}}
                    @endif
                        " method="post">
                        @csrf
                        @if(isset($reserve))
                            @method('put')
                        @endif
                        <div class="row">
                            <div class="col">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{$reserve->name??''}}">
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                       placeholder="your@email.com" value="{{$reserve->email??''}}">
                                @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="09123456789" value="{{$reserve->phone??''}}">
                                @error('phone')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="people" class="form-label">Number of persons</label>
                                <input type="text" name="people" class="form-control" placeholder="12 persons" value="{{$reserve->people??''}}">
                                @error('people')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" value="{{isset($reserve->date)?$reserve->date:''}}">
                                @error('date')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="time" class="form-label">Time</label>
                                <select class="form-select form-control" name="time">
                                    <option value="17:00:00" selected>5:00 PM</option>
                                    <option value="18:00:00">6:00 PM</option>
                                    <option value="19:00:00">7:00 PM</option>
                                    <option value="20:00:00">8:00 PM</option>
                                    <option value="21:00:00">9:00 PM</option>
                                </select>
                                @error('time')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Special Request</label>
                            <textarea class="form-control" rows="4" name="message" placeholder="Message" value="{{$reserve->message??''}}"></textarea>
                            @error('message')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-12 my-3">
                            <button type="submit" class="btn btn-success">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

