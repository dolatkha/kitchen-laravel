@extends('adminmainpage')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-md-7 mx-auto my-3 shadow bg-light p-5">
                @if($msg)
                    {!! $msg !!}
                @endif
                <form class="form-control" action="
                    @if(isset($predit))
                        {{url('/product/edit/'.$predit->id)}}
                    @else
                        {{url('/product/add')}}
                    @endif
                    " method="post">
                    @csrf
                    @if(isset($predit))
                        @method('put')
                    @endif
                    <label class="form-label">
                        Product Name:
                    </label>
                    <input type="text" class="form-control" name="name"  value="{{$predit->name??''}}">
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <label class="form-label">
                        Price:
                    </label>
                    <input type="number" class="form-control" name="price"  value="{{$predit->price??''}}">
                    @error('price')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <label class="form-label">
                        Count :
                    </label>
                    <input type="number" class="form-control" name="count" value="{{$predit->count??''}}">
                    @error('count')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <label class="form-label pt-2">
                        Status:
                    </label>
                    <br>
                    <input type="radio" name="status" value="1"
                           @if(isset($predit) && $predit->status==1)
                               checked
                           @endif
                           class="form-check-input">active
                    <input type="radio" name="status" value="0"
                           @if(isset($predit) && $predit->status==0)
                               checked
                           @endif
                           class="form-check-input"> deactive
                    @error('status')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <br>
                    <label class="form-label pt-2">
                        Title:
                    </label>
                    <select name="cat" class="form-select">
                        @foreach($cats as $ca)
                        <option
                            @if(isset($product) && $product->category_id==$ca->id)
                                selected
                            @endif
                            value="{{$ca->id}}">{{$ca->name}}</option>
                        @endforeach
                    </select>
                    @error('cat')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <label class="form-label pt-2">Show Date</label>
                    <input type="date" name="start_date" class="form-control" value="{{isset($predit->start_date)?$predit->start_date:''}}">
                    @error('start_date')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="submit" name="sub" class="btn btn-success mt-2" value="Send">
                </form>
            </div>
        </div>
    </div>
@endsection
