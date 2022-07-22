<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function index()
    {
        $products=Product::all();
//        $products=Product::paginate(3);
        return response()->json($products);
    }
}
