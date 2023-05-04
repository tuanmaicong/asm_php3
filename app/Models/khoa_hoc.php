<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class khoa_hoc extends Model
{
    use HasFactory;
    protected $table="khoa_hoc";
    protected $fillable=['id','ten_khoa_hoc','mo_ta','trang_thai','gia_tien','id_danh_muc'];
    public function loadListWithPager($param=[]){
        $Query=DB::table($this->table)->select($this->fillable);
        $list=$Query->paginate(8);
        return $list;
    }

    public function saveNews($params=[]){
        $data=array_merge($params['cols']);
        $res=DB::table($this->table)->insertGetId($data);
        return $res;
    }
    public function loadOne($id,$params=[]){
        $Query=DB::table($this->table)->where('id','=',$id);
        $obj=$Query->first();
        return $obj;
    }
    public function updateKhoaHoc($params){
        if(empty($params['cols']['id'])){
            Session::push('error','Không có dữ liệu cập nhật');
        }
        $dataUpdate=[];
        foreach ($params['cols'] as $colName=>$val){
            if($colName=='id')continue;
            $dataUpdate[$colName]=(strlen($val)==0) ?null:$val;
        }
        $res = DB::table($this->table)->where('id',$params['cols']['id'])->update($dataUpdate);
        return $res;
    }
}
