<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        //đây là noi viết validate
        $rules=[];
        //lấy ra tên phuong thuc dang hoat dong
        $currenAction=$this->route()->getActionMethod();
        switch ($this->method()):
            case 'POST':
                switch ($currenAction){
                    case 'add':
                        $rules=[
                            "ten_lop"=>"required",
                            "so_cho"=>"required",
                            "thoi_gian_hoc"=>"required",
                            "id_khoa_hoc"=>"required"
                        ];
                        break;
                    default:break;
                }break;
        endswitch;
        return $rules;

        return [
            //
        ];
    }
    public function messages(){
        return [
            'ten_lop.required'=>"Bắt buộc phải nhập tên lớp",
            'so_cho.required'=>"Bắt buộc phải nhập số chỗ",
            'thoi_gian_hoc.required'=>"Bắt buộc phải nhập thoi_gian_hoc",
            'id_khoa_hoc.required'=>"Bắt buộc phải nhập id khóa học"
        ];
    }
}
