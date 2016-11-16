<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Ward;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards = Ward::paginate(10);
        return view('admin.ward.index', ['wards' => $wards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('cities')->orderBy('name', 'asc')->get();
        return view('admin.ward.create', ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'city' => 'required',
                'district' =>'required',
                'WardName' => 'required',
            ],
            [
                'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
                'district.required' => 'Bạn chưa chọn quận/huyện',
                'WardName.required' => 'Tên xã/phường không được để trống',
            ]
        );
        $ward = new Ward;
        $ward->name = $request->WardName;
        $ward->slug = changeTitle($ward->name);
        $ward->district_id = $request->district;
        $ward->save();
        return redirect('admin/xa-phuong/them')->with('message', 'Đã thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities = DB::table('cities')->orderBy('name', 'ASC')->get();
        $ward = Ward::find($id);
        return view('admin.ward.edit', ['ward' => $ward, 'cities' => $cities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, 
            [
                'city' => 'required',
                'district' =>'required',
                'WardName' => 'required',
            ],
            [
                'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
                'district.required' => 'Bạn chưa chọn quận/huyện',
                'WardName.required' => 'Tên xã/phường không được để trống',
            ]
        );
        $ward = Ward::find($id);
        $ward->name = $request->WardName;
        $ward->district_id = $request->district;
        $ward->slug = changeTitle($ward->name);
        $ward->save();
        return redirect('admin/xa-phuong/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ward = Ward::find($id);
        $ward->delete();
        return redirect('admin/xa-phuong/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
