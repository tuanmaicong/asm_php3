<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danh_gia extends Model
{
    use HasFactory;
    protected $table="danh_gia";
    protected $fillable=['id','id_dang_ky','id_hoc_vien','so_sao','noi_dung'];

    public function loadListDanhGia($params=[]){
        $Query=DB::table($this->table)->select($this->fillable);
        $list=$Query->paginate(4);
        return $list;
    }
}
