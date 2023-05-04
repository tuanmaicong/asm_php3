<?php

namespace App\Http\Controllers;

use App\Http\Requests\KhoaHocRequest;
use App\Models\khoa_hoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KhoaHocController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v=[];
    }

    public function index(Request $request){
        $khoaHoc=new khoa_hoc();
        $this->v['extParams']=$request->all();
        $this->v['list']=$khoaHoc->loadListWithPager($this->v['extParams']);
        $this->v['title']="Khóa học";
        return view('khoahoc.index',$this->v);
    }
    public function add(KhoaHocRequest $request){
        $method_route="route_BackEnd_KhoaHoc_index";
        $this->v['_title']="Thêm Khóa học";
        if($request->isMethod('post')){
            $params=[];
            $params['cols']=$request->post();
            unset($params['cols']['_token']);
            $modelKhoaHoc=new khoa_hoc();
            $res=$modelKhoaHoc->saveNews($params);
            if($res == null){
                return redirect()->route($method_route);
            }elseif ($res > 0){
                Session::flash('success','Thêm mới thanh công!');
            }else{
                Session::flash('error','Lỗi thêm mới!');
            }
        }
        return view('khoahoc.add',$this->v);
    }
    public function detail($id,Request $request){
        $this->v['_title']="Chi tiết danh mục";
        $modelKhoaHoc=new khoa_hoc();
        $objItem=$modelKhoaHoc->loadOne($id);
        $this->v['objItem']=$objItem;
        return view('khoahoc.detail',$this->v);
    }

    public function update($id,Request $request){
        $method_route="route_BackEnd_KhoaHoc_detail";
        $params=[];
        $params['cols']=$request->post();
        unset($params['cols']['_token']);
        $params['cols']['id']=$id;
        $modelKhoaHoc=new khoa_hoc();
        $res=$modelKhoaHoc->updateKhoaHoc($params);
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
        $danhmuc = khoa_hoc::destroy($id);
        return redirect('khoahoc');
    }
}
