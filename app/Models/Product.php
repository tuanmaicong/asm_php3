<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table="product";
    protected $fillable=['id','name'];

    public function loadListProduct($param=[]){
        $Query=DB::table($this->table)->select($this->fillable);
        $list=$Query->paginate(3);
        return $list;
    }
}
