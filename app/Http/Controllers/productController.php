<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public  function index($msg=''){
        $products=Product::with('category')->paginate(5);
        return view('pages.product.table',['products'=>$products,'msg'=>$msg]);
    }

   public function create($msg=''){
        $allcats=Category::all();
        return view('pages.product.form',['msg'=>$msg,'cats'=>$allcats]);
   }
    public function store(Request $request){
        $validation=$request->validate([
            'name'=>'required|string|min:3',
            'price'=>'required|numeric',
            'count'=>'required|numeric',
            'status'=>'required|in:0,1',
            'cat'=>'required|exists:categories,id',
            'start_date'=>'required|date:Y/m/d',
        ]);
        try {
            $pr=new Product();
            $pr->name=$request->input('name');
            $pr->price=$request->input('price');
            $pr->count=$request->input('count');
            $pr->status=$request->input('status');
            $pr->category_id=$request->input('cat');
            $pr->start_date=$request->input('start_date');
            $pr->save();
            return $this->create('<div class="alert alert-success">Success submit</div>');
        }
        catch (Exception $ex){
            return $this->create('<div class="alert alert-danger">Fail in submit</div>');
        }
    }

    public function edit($id,$msg=''){
        $predit=Product::findOrFail($id);
        $allcats=Category::all();
        return view('pages.product.form',['predit'=>$predit,'msg'=>$msg,'cats'=>$allcats]);
    }

    public function update(Request $request,$id){
        $validation=$request->validate([
            'name'=>'required|string|min:3',
            'price'=>'required|numeric',
            'count'=>'required|numeric',
            'status'=>'required|in:0,1',
            'cat'=>'required|exists:categories,id',
            'start_date'=>'required|date:Y/m/d',
        ]);
        try {
            $pr=Product::findOrFail($id);
            $pr->name=$request->input('name');
            $pr->price=$request->input('price');
            $pr->count=$request->input('count');
            $pr->status=$request->input('status');
            $pr->category_id=$request->input('cat');
            $pr->start_date=$request->input('start_date');
            $pr->save();
            return $this->edit($id,'<div class="alert alert-success">Edit success</div>');
        }
        catch (Exception $ex){
            return $this->edit($id,'<div class="alert alert-danger">Fail in edit</div>');
        }
    }
    public function destroy(Request $request){
        try{
            $pr=Product::findOrFail($request->input('row'));
            Product::destroy($pr->id);
            return $this->index('<div class="alert alert-success">Delete success</div>');
        }catch (Exception $ex){
            return $this->index('<div class="alert alert-danger">Fail in delete</div>');
        }
    }
}
