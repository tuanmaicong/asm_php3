<?php

namespace App\Http\Controllers;

use App\Http\Requests\NguoidungRequest;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    //
    private $v;
    public function __construct()
    {
        $this->v=[];
    }

    public function index(Request $request){
        //echo"Hello world";
//       $users=DB::table('tests')
//           ->select('name')
//           ->where('id','=',1)
//           //->get();
//           ->first();
//       dd($users);
        //danh sách người dùng
        $test = new users();
        $this->v['extParams']=$request->all();
        $this->v['list']=$test->loadListPage($this->v['extParams']);
        $this->v['title']="ABC";
        return view("nguoidung.index",$this->v);

        //dd($khoa_hoc);

    }
    public function add(NguoidungRequest $request){
        //tạo ra request va viết validate mọi thứ trong đó
        //php artisan make:request TestRequest
        $method_route = "route_BackEnd_User_index";
        $this->v['_title'] = "Thêm ngươi dung";
        if($request->isMethod('post')){
            // dd($request->post());
            $params = [];
            $params['cols'] = $request->post();
            unset( $params['cols']['_token']);
            if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
            {
                $params['cols']['hinh'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }
            $modelTes = new users();
            $res = $modelTes->saveNews($params);
            if($res == null){
                return redirect()->route($method_route);
            }elseif ($res > 0){
                Session::flash('success','Thêm mới thanh công!');
            }else{
                Session::flash('error','Lỗi thêm mới!');
            }
        }
        return view('nguoidung.add',$this->v);
    }

    public function detail($id,Request $request){
        $this->v['_title']="Chi tiết người dùng";
        $modelNguoiDung=new users();
        $objItem=$modelNguoiDung->loadOne($id);
        $this->v['objItem']=$objItem;
        return view('nguoidung.detail',$this->v);

    }

    public function update($id,NguoidungRequest $request){
        $method_route="route_BackEnd_User_detail";
        $params=[];
        $params['cols']=$request->post();
        unset( $params['cols']['_token']);
        $params['cols']['id']=$id;
        $modelNguoiDung=new users();
        if(isNull($params['cols']['password'])){
            $params['cols']['password']=Hash::make($params['cols']['id']);
        }
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
    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('cmnd',$fileName,'public');
    }
    public function destroy($id)
    {
        $danhmuc = users::destroy($id);
        return redirect('nguoidung');
    }
}
