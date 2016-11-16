<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHouseRequest extends FormRequest
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
            'title'=>'required|min:10|max:255',
            'category'=>'required',
            'kind'=>'required',
            'info'=>'required|min:20|max:3000',
            'city'=>'required',
            'district'=>'required',
            'address'=>'max:255',
            'trend'=>'required',
            'price'=>'required',
            'day'=>'required',
            'month'=>'required',
            'year'=>'required',
            'ContactName'=>'required|max:255',
            'email'=>'email',
            'cellphone'=>'required',
            'images' => 'mimes:jpeg,jpg,png'

        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Vui lòng nhập tiêu đề',
            'title.min'=>'Tiêu đề phải chứa ít nhất 10 kí tự',
            'title.max'=>'Tiêu đề không được vượt quá 255 kí tự',
            'category.required'=>'Vui lòng chọn hình thức nhà',
            'kind.required'=>'Vui lòng chọn loại nhà',
            'info.required'=>'Vui lòng nhập thông tin nhà',
            'info.min'=>'Thông tin nhà không phải chứa ít nhất 20 kí tự',
            'info.max'=>'Thông tin nhà không được vượt quá 3000 kí tự',
            'city.required'=>'Vui lòng chọn tỉnh/thành phố',
            'district.required'=>'Vui lòng chọn quận/huyện',
            'district.min'=>'Địa chỉ nhà phải chứa ít nhất 5 kí tự',
            'address.max'=>'Địa chỉ nhà không được vượt quá 255 kí tự',
            'trend.required'=>'Vui lòng chọn hướng nhà',
            'price.required'=>'Vui lòng nhập giá bán nhà',
            'day.required'=>'Vui lòng chọn ngày hết hạn',
            'month.required'=>'Vui lòng chọn tháng hết hạn',
            'year.required'=>'Vui lòng chọn năm hết hạn',
            'ContactName.required'=>'Vui lòng nhập tên liên lạc',
            'email.email'=>'Vui lòng nhập đúng định dạng email',
            'cellphone.required'=>'Vui lòng nhập số điện thoại liên lạc',
            'images.mimes'=>'Vui lòng chọn file ảnh có đuôi jpg, jpeg, png'
        ];
    }
}
