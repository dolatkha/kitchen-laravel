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
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
                <th>people</th>
                <th>date</th>
                <th>time</th>
                <th>message</th>
                <th>Create Date</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reserves as $re)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$re->id}}</td>
                    <td>{{$re->name}}</td>
                    <td>{{$re->email}}</td>
                    <td>{{$re->phone}}</td>
                    <td>{{$re->people}}</td>
                    <td>{{$re->date}}</td>
                    <td>{{$re->time}}</td>
                    <td>{{$re->message}}</td>
                    <td>{{($re->created_at)->format('Y-m-d')}}</td>
                    <td>
                        <a href="{{url('reservation/edit/'.$re->id)}}" class="btn btn-outline-info" title="edit"><i class="fa fa-edit"></i> </a>
                        <form method="post" action="{{url('/reservation/list')}}" class="d-inline">
                            @csrf
                            @method('delete')
                            <input type="hidden" value="{{$re->id}}" name="row">
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
                @if($reserves->currentPage()<=1)
                    disabled
                    @endif
            " href="{{url()->current().'?page='.($reserves->currentPage()-1)}}">Previous</a>
            @if($reserves->currentPage()>=2)
                <a class=" btn btn-warning" href="{{url()->current().'?page='.($reserves->currentPage()-1)}}">{{$reserves->currentPage()-1}}</a>
            @endif
            <a class=" btn btn-warning disabled" href="{{url()->current().'?page='.($reserves->currentPage()-1)}}">{{$reserves->currentPage()}}</a>
            @if($reserves->lastPage()>$reserves->currentPage())
                <a class=" btn btn-warning" href="{{url()->current().'?page='.($reserves->currentPage()+1)}}">{{$reserves->currentPage()+1}}</a>
            @endif
            @if($reserves->lastPage()>$reserves->currentPage()+1)
                ...
            @endif
            <a class=" btn btn-warning
                @if($reserves->lastPage()==$reserves->currentPage())
                disabled
                @endif
            " href="{{url()->current().'?page='.($reserves->currentPage()+1)}}">Next</a>
            <h5 class="text-center mt-2">
               Total record: {{$reserves->total()}}
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
