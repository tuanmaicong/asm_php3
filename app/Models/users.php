<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class users extends Model
{
    use HasFactory;
    protected $table="users";
    protected $fillable=['id','name','email','hinh'];


    public function loadListPage($param=[]){
        $Query=DB::table($this->table)
            ->select($this->fillable);
        $lists = $Query->paginate(18);
        return $lists;
    }

    public function saveNews($params){
        $data=array_merge($params['cols'],[
                'password'=>Hash::make($params['cols']['password'])
            ]
        );
        $res=DB::table($this->table)->insertGetId($data);
        return $res;
    }

    //load ra chi tiết người dùng
    public function loadOne($id,$param=[]){
        $Query=DB::table($this->table)->where('id','=',$id);
        $obj=$Query->first();
        return $obj;
    }

    public function saveUpdate($params){
        if(empty($params['cols']['id'])){
            Session::push('error','Không có dữ liệu cập nhât');
        }

        $dataUpdate=[];
        foreach ($params['cols'] as $colName=>$val){
            if($colName=='id')continue;
            $dataUpdate[$colName]=(strlen($val)==0) ?null:$val;
        }
        $res=DB::table($this->table)->where('id',$params['cols']['id'])->update($dataUpdate);
        return $res;
    }
}
