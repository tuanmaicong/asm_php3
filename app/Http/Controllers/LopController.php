<?php

namespace App\Http\Controllers;

use App\Http\Requests\LopRequest;
use App\Models\lop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class LopController extends Controller
{
    //
    public function __construct()
    {
        $this->v=[];
    }

    public function index(Request $request){
        $lop=new lop();
        $this->v['extParams']=$request->all();
        $this->v['list']=$lop->loadListLop($this->v['extParams']);
        $this->v['title']="Lớp";
        return view('lop.index',$this->v);
    }

    public function add(LopRequest $request){
        $method_route="route_BackEnd_Lop_index";
        $this->v['_title']="Thêm lớp học";
        if($request->isMethod('post')){
            $params=[];
            $params['cols']=$request->post();
            unset($params['cols']['_token']);
            $modelLop=new lop();
            $res=$modelLop->saveNews($params);
            if($res == null){
                return redirect()->route($method_route);
            }elseif ($res > 0){
                Session::flash('success','Thêm mới thanh công!');
            }else{
                Session::flash('error','Lỗi thêm mới!');
            }
        }
        return view('lop.add',$this->v);
    }
    public function detail($id,Request $request){
        $this->v['_title']="Chi tiết danh mục";
        $modelLopHoc=new lop();
        $objItem=$modelLopHoc->loadOne($id);
        $this->v['objItem']=$objItem;
        return view('lop.detail',$this->v);
    }

    public function update($id,Request $request){
        $method_route="route_BackEnd_Lop_detail";
        $params=[];
        $params['cols']=$request->post();
        unset($params['cols']['_token']);
        $params['cols']['id']=$id;
        $modelLopHoc=new lop();
        $res=$modelLopHoc->updateLopHoc($params);
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
        $danhmuc = lop::destroy($id);
        return redirect('lop');
    }
}
