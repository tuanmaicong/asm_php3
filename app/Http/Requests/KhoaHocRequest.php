<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhoaHocRequest extends FormRequest
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
                            "ten_khoa_hoc"=>"required",
                            "gia_tien"=>"required",
                            "id_danh_muc"=>"required"
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
            'ten_khoa_hoc.required'=>"Bắt buộc phải nhập tên danh mục",
            'gia_tien.required'=>"Bắt buộc phải nhập giá tiền",
            'id_danh_muc.required'=>"Bắt buộc phải nhập id danh mục"
        ];
    }
}
