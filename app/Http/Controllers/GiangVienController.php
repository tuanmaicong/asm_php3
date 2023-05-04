<?php

namespace App\Http\Controllers;

use App\Http\Requests\GiangVienRequest;
use App\Models\giang_vien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GiangVienController extends Controller
{
    //
    public function __construct()
    {
        $this->v=[];
    }

    public function index(Request $request){
        $lop=new giang_vien();
        $this->v['extParams']=$request->all();
        $this->v['list']=$lop->loadListGiangVien($this->v['extParams']);
        $this->v['title']="Giảng viên";
        return view('giangvien.index',$this->v);
    }
    public function add(GiangVienRequest $request){
        $method_route="route_BackEnd_giangvien_index";
        $this->v['_title']="Thêm lớp học";
        if($request->isMethod('post')){
            $params=[];
            $params['cols']=$request->post();
            unset($params['cols']['_token']);
            $modeGiangVien=new giang_vien();
            $res=$modeGiangVien->saveNews($params);
            if($res == null){
                return redirect()->route($method_route);
            }elseif ($res > 0){
                Session::flash('success','Thêm mới thanh công!');
            }else{
                Session::flash('error','Lỗi thêm mới!');
            }
        }
        return view('giangvien.add',$this->v);
    }
    public function detail($id,Request $request){
        $this->v['_title']="Chi tiết giảng viên";
        $modelGiangVien=new giang_vien();
        $objItem=$modelGiangVien->loadOne($id);
        $this->v['objItem']=$objItem;
        return view('giangvien.detail',$this->v);
    }

    public function update($id,Request $request){
        $method_route="route_BackEnd_giangvien_detail";
        $params=[];
        $params['cols']=$request->post();
        unset($params['cols']['_token']);
        $params['cols']['id']=$id;
        $modelGiangVien=new giang_vien();
        $res=$modelGiangVien->updateGiangVien($params);
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
        $danhmuc = giang_vien::destroy($id);
        return redirect('giangvien');
    }
}
