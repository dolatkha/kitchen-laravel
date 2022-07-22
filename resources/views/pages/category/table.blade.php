@extends('adminmainpage')
@section('content')
    <div class="table-responsive col-10 mx-auto mt-5 px-5">
        @if($msg)
            {!! $msg !!}
        @endif
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Category Name</th>
                <th>Status</th>
                <th>Description</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cat as $ca)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$ca->id}}</td>
                    <td>{{$ca->name}}</td>
                    <td>
                        @if($ca->status==1)
                            <span class="rounded-pill bg-success text-white p-1">active</span>
                        @else
                            <span class="rounded-pill bg-danger text-white p-1">deactive</span>
                        @endif
                    </td>
                    <td>{{$ca->description}}</td>
                    <td>
                        <a href="{{route('categories.edit',['category'=>$ca->id])}}" class="btn btn-outline-info" title="edit"><i class="fa fa-edit"></i> </a>
                        <form method="post" action="{{route('categories.destroy',['category'=>$ca->id])}}" class="d-inline">
                            @csrf
                            @method('delete')
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
                @if($cat->currentPage()<=1)
                    disabled
                    @endif
            " href="{{url()->current().'?page='.($cat->currentPage()-1)}}">Previous</a>
            @if($cat->currentPage()>=2)
                <a class=" btn btn-warning" href="{{url()->current().'?page='.($cat->currentPage()-1)}}">{{$cat->currentPage()-1}}</a>
            @endif
            <a class=" btn btn-warning disabled" href="{{url()->current().'?page='.($cat->currentPage()-1)}}">{{$cat->currentPage()}}</a>
            @if($cat->lastPage()>$cat->currentPage())
                <a class=" btn btn-warning" href="{{url()->current().'?page='.($cat->currentPage()+1)}}">{{$cat->currentPage()+1}}</a>
            @endif
            @if($cat->lastPage()>$cat->currentPage()+1)
                ...
            @endif
            <a class=" btn btn-warning
                @if($cat->lastPage()==$cat->currentPage())
                disabled
                @endif
            " href="{{url()->current().'?page='.($cat->currentPage()+1)}}">Next</a>
            <h5 class="text-center mt-2">
               Total record: {{$cat->total()}}
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
