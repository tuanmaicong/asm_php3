<?php

namespace App\Http\Controllers;

use App\Models\danh_gia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhGiaController extends Controller
{
    //
    private $v;
    public function __construct()
    {
        $this->v=[];
    }

    public function index(Request $request){
        $danhmuc = new danh_gia();
        $this->v['extParams']=$request->all();
        $this->v['list']=$danhmuc->loadListDanhGia($this->v['extParams']);
        $this->v['title']="ABC";
        return view("danhgia.index",$this->v);
        //dd($khoa_hoc);
    }
    public function destroy($id)
    {
        $danhmuc = danh_gia::destroy($id);
        return redirect('danhgia');
    }
}
