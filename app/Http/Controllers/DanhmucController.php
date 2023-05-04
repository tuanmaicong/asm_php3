<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DanhmucController extends Controller
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
        $this->v['title']="ABC";
        return view("test.index",$this->v);
        //dd($khoa_hoc);
    }

    public function add(TestRequest $request){
        //tạo ra request va viết validate mọi thứ trong đó
        //php artisan make:request TestRequest
        $method_route = "route_BackEnd_NguoiDung_index";
        $this->v['_title'] = "Thêm danh mục";
        if($request->isMethod('post')){
            // dd($request->post());
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
            $modelDanhMuc = new DanhMuc();
            $res = $modelDanhMuc->saveNews($params);
            if($res == null){
                return redirect()->route($method_route);
            }elseif ($res > 0){
                Session::flash('success','Thêm mới thanh công!');
            }else{
                Session::flash('error','Lỗi thêm mới!');
            }
        }
        return view('test.add',$this->v);
    }

    public function detail($id,Request $request){
        $this->v['_title']="Chi tiết danh mục";
        $modelDanhMuc=new DanhMuc();
        $objItem=$modelDanhMuc->loadOne($id);
        $this->v['objItem']=$objItem;
        return view('test.detail',$this->v);
    }

    public function update($id,Request $request){
        $method_route="route_BackEnd_NguoiDung_detail";
        $params=[];
        $params['cols']=$request->post();
        unset($params['cols']['_token']);
        $params['cols']['id']=$id;
        $modelDanhMuc=new DanhMuc();
        $res=$modelDanhMuc->saveUpdate($params);
        if($res==null){
            return redirect()->route($method_route,['id'=>$id]);
        }elseif ($res==1){
            Session::flash('success','Cập nhật thành công');
            return redirect()->route($method_route,['id'=>$id]);
        }else{
            Session::flash('error','Lỗi cập nhật');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
    public function destroy($id)
    {
        $danhmuc = DanhMuc::destroy($id);
        return redirect('test');
    }
}
