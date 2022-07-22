<?php

namespace App\Http\Controllers;


use App\Models\Reservation;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public  function index($msg=''){
        $reserves=Reservation::paginate(5);
        return view('pages.reservation.table',['reserves'=>$reserves,'msg'=>$msg]);
    }

    public function create($msg=''){
        return view('pages.reservation.form',['msg'=>$msg]);
    }

    public function store(Request $request){
        $validation=$request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'people'=>'required|numeric',
            'date'=>'required|date:Y/m/d',
            'time'=>'required|date_format:H:i:s',
            'message'=>'nullable|string',
        ]);
        try {
            $res=new Reservation();
            $res->name=$request->input('name');
            $res->email=$request->input('email');
            $res->phone=$request->input('phone');
            $res->people=$request->input('people');
            $res->date=$request->input('date');
            $res->time=$request->input('time');
            $res->message=$request->input('message');
            $res->save();
            return $this->create('<div class="alert alert-success">Success submit</div>');
        }
        catch (Exception $ex){
            return $this->create('<div class="alert alert-danger">Fail in submit</div>');
        }
    }
    public function edit($id,$msg=''){
        $reserve=Reservation::findOrFail($id);
        return view('pages.reservation.form',['reserve'=>$reserve,'msg'=>$msg]);
    }

    public function update(Request $request,$id){
        $validation=$request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'people'=>'required|numeric',
            'date'=>'required|date:Y/m/d',
            'time'=>'required|date_format:H:i:s',
            'message'=>'nullable|string',
        ]);
        try {
            $res=Reservation::findOrFail($id);
            $res->name=$request->input('name');
            $res->email=$request->input('email');
            $res->phone=$request->input('phone');
            $res->people=$request->input('people');
            $res->date=$request->input('date');
            $res->time=$request->input('time');
            $res->message=$request->input('message');
            $res->save();
            return $this->edit($id,'<div class="alert alert-success">Edit success</div>');
        }
        catch (Exception $ex){
            return $this->edit($id,'<div class="alert alert-danger">Fail in edit</div>');
        }
    }
    public function destroy(Request $request){
        try{
            $res=Reservation::findOrFail($request->input('row'));
            Reservation::destroy($res->id);
            return $this->index('<div class="alert alert-success">Delete success</div>');
        }catch (Exception $ex){
            return $this->index('<div class="alert alert-danger">Fail in delete</div>');
        }
    }
}
