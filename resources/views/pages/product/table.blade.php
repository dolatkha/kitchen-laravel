@extends('adminmainpage')
@section('content')
    <div class="table-responsive mt-5 px-5">
        @if($msg)
            {!! $msg !!}
        @endif
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Count</th>
                <th>Status</th>
                <th>Title</th>
                <th>Create Date</th>
                <th>Show Date</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $pr)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$pr->id}}</td>
                    <td>{{$pr->name}}</td>
                    <td>{{number_format($pr->price,0,'.',',')}}</td>
                    <td>
                        @if($pr->count==0 || !$pr->count)
                            Not having
                        @else
                            {{$pr->count}}
                        @endif
                    </td>
                    <td>
                        @if($pr->status==1)
                            <span class="rounded-pill bg-success text-white p-1">active</span>
                        @else
                            <span class="rounded-pill bg-danger text-white p-1">deactive</span>
                        @endif
                    </td>
                    <td>
                       {{$pr->category->name}}
                    </td>
                    <td>{{$pr->start_date?$pr->start_date:'---'}}</td>
                    <td>{{$pr->created_at}}</td>
                    <td>
                        <a href="{{url('product/edit/'.$pr->id)}}" class="btn btn-outline-info" title="edit"><i class="fa fa-edit"></i> </a>
                        <form method="post" action="{{url('/product/list')}}" class="d-inline">
                            @csrf
                            @method('delete')
                            <input type="hidden" value="{{$pr->id}}" name="row">
                            <button class="btn btn-danger" type="submit" title="delete" onclick="confirmdelete(event)"><i class="fa fa-trash"></i> </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center col-md4 mb-5 mt-3 col-12">
        <div class="text-center">
            <a class=" btn btn-warning
                @if($products->currentPage()<=1)
                    disabled
                    @endif
            " href="{{url()->current().'?page='.($products->currentPage()-1)}}">Previous</a>
            @if($products->currentPage()>=2)
                <a class=" btn btn-warning" href="{{url()->current().'?page='.($products->currentPage()-1)}}">{{$products->currentPage()-1}}</a>
            @endif
            <a class=" btn btn-warning disabled" href="{{url()->current().'?page='.($products->currentPage()-1)}}">{{$products->currentPage()}}</a>
            @if($products->lastPage()>$products->currentPage())
                <a class=" btn btn-warning" href="{{url()->current().'?page='.($products->currentPage()+1)}}">{{$products->currentPage()+1}}</a>
            @endif
            @if($products->lastPage()>$products->currentPage()+1)
                ...
            @endif
            <a class=" btn btn-warning
                @if($products->lastPage()==$products->currentPage())
                disabled
                @endif
            " href="{{url()->current().'?page='.($products->currentPage()+1)}}">Next</a>
            <h5 class="text-center mt-2">
               Total record: {{$products->total()}}
            </h5>
        </div>

    </div>
    <script>
        confirmdelete=function (e){
            if(confirm('Are you sure?')==true){
                return true
            }
            else {
                e.preventDefault();
                return false;
            }
        }
    </script>
@endsection
