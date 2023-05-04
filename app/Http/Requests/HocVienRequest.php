<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HocVienRequest extends FormRequest
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
                             "ten_hoc_ven"=>"required",
                            "dia_chi"=>"required",
                            "email"=>"required",
                            "so_dien_thoai"=>"required",
                            "so_cmt"=>"required"
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
             'ten_hoc_ven.required'=>"Bắt buộc phải nhập tên học viên",
            'dia_chi.required'=>"Bắt buộc phải nhập địa chỉ",
            'email.required'=>"Bắt buộc phải nhập email",
             'so_dien_thoai.required'=>"Bắt buộc phải nhập số điện thoại",
            'so_cmt.required'=>"Bắt buộc phải nhập số chứng minh thu"
        ];
    }
}


