<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique|min:4|max:100',
            'email' => 'email|unique|required',
            'password' => 'required|min:8|max:100', 
            'passwordAgain' => 'required|same:password',
            'fullname' => 'required|max:100',
            'role' => 'required',
            'gender' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'city' => 'required',
            'district' => 'required',
            'cellphone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Bạn chưa nhập username',
            'username.unique' => 'Username đã tồn tại',
            'username.min' => 'Username phải có tối thiểu 4 kí tự',
            'username.max' => 'Username không được vượt quá 100 kí tự',  
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải tối thiểu 8 kí tự',
            'password.max' => 'Mật khẩu không được vượt quá 100 kí tự',
            'passwordAgain.required' => 'Bạn chưa xác nhận lại mật khẩu',
            'passwordAgain.same' => 'Xác nhận lại mật khẩu không đúng',
            'fullname.required' => 'Bạn chưa nhập họ tên',
            'fullname.max' => 'Tên không được vượt quá 100 kí tự',
            'role.required' => 'Bạn chưa chọn vai trò',
            'gender.required' => 'Bạn chưa chọn giới tính',
            'day.required'=> 'Bạn chưa nhập ngày sinh',
            'month.required' => 'Bạn chưa nhập tháng sinh',
            'year.required' => 'Bạn chưa nhập năm sinh',
            'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
            'district.required' => 'Bạn chưa chọn quận/huyện',
            'cellphone.required' => 'Bạn chưa nhập điện thoại di động'
        ];
    }
}
