<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
                            "ten_danh_muc"=>"required"
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
            'ten_danh_muc.required'=>"Bắt buộc phải nhập tên danh mục"
        ];
    }
}
