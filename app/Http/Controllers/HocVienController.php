<?php

namespace App\Http\Controllers;

use App\Http\Requests\HocVienRequest;
use App\Http\Requests\NguoidungRequest;
use App\Models\hoc_vien;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isNull;

class HocVienController extends Controller
{
    public function index(Request $request){
        //echo"Hello world";
//       $users=DB::table('tests')
//           ->select('name')
//           ->where('id','=',1)
//           //->get();
//           ->first();
//       dd($users);
        //danh sách người dùng
        $hocvien = new hoc_vien();
        $this->v['extParams']=$request->all();
        $this->v['list']=$hocvien->loadListPage($this->v['extParams']);
        $this->v['title']="ABC";
        return view("hocvien.index",$this->v);
        //dd($khoa_hoc);

    }

    public function add(HocVienRequest $request){
        //tạo ra request va viết validate mọi thứ trong đó
        //php artisan make:request TestRequest
        $method_route = "route_BackEnd_hocvien_index";
        $this->v['_title'] = "Thêm học viên";
        if($request->isMethod('post')){
            // dd($request->post());
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
            $modelTes = new hoc_vien();
            $res = $modelTes->saveNews($params);
            if($res == null){
                return redirect()->route($method_route);
            }elseif ($res > 0){
                Session::flash('success','Thêm mới thanh công!');
            }else{
                Session::flash('error','Lỗi thêm mới!');
            }
        }
        return view('hocvien.add',$this->v);
    }
    public function detail($id,Request $request){
        $this->v['_title']="Chi tiết học viên";
        $modelHocVien=new hoc_vien();
        $objItem=$modelHocVien->loadOne($id);
        $this->v['objItem']=$objItem;
        return view('hocvien.detail',$this->v);
    }
    public function update($id,HocVienRequest $request){
        $method_route="route_BackEnd_hocvien_detail";
        $params=[];
        $params['cols']=$request->post();
        unset( $params['cols']['_token']);
        $params['cols']['id']=$id;
        $modelNguoiDung=new hoc_vien();
        $res = $modelNguoiDung->saveUpdate($params);
        if($res==null){
            return redirect()->route($method_route,['id'=>$id]);
        }elseif($res==1){
            Session::flash('success','Cập nhật thành công');
            return redirect()->route($method_route,['id'=>$id]);
        }else{
            Session::flash('error','Lỗi cập nhật');
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
    public function destroy($id)
    {
        $danhmuc = hoc_vien::destroy($id);
        return redirect('hocvien');
    }
}
