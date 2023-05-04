<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private $v;

    public function __construct()
    {
        $this->v=[];
    }

    public function index(Request $request){
        $product=new Product();
        $this->v['extParams']=$request->all();
        $this->v['list']=$product->loadListProduct($this->v['extParams']);
        $this->v['title']="Product";
        return view('product.index',$this->v);
    }
}
