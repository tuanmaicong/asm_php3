<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TrangChuController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v=[];
    }

    public function index(Request $request){
        $danhmuc = new DanhMuc();
        $this->v['extParams']=$request->all();
        $this->v['list']=$danhmuc->loadListDanhMuc($this->v['extParams']);
        $this->v['title']="Trang chủ";
        return view('templates.layoutclient',$this->v);
        //dd($khoa_hoc);
    }
    public function trangchu(){
        return view('client.index');
    }
    public function detail($id,Request $request){
        $this->v['_title']="Chi tiết danh mục";
        $modelDanhMuc=new DanhMuc();
        $objItem=$modelDanhMuc->loadOne($id);
        $this->v['objItem']=$objItem;
        return view('templates.layoutclient',$this->v);
    }
}
