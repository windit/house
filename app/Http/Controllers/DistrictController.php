<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\District;

use App\City;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::paginate(10);
        return view('admin.district.index', ['districts' => $districts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('cities')->orderBy('name', 'ASC')->get();
        return view('admin.district.create', ['cities' => $cities]);
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
                'DistrictName' => 'required',
            ],
            [
                'city.required' => 'Vui lòng chọn tỉnh/thành phố',
                'DistrictName.required' => 'Tên quận/huyện không được để trống',
            ]
        );
        $district = new District;
        $district->name = $request->DistrictName;
        $district->city_id = $request->city;
        $district->slug = changeTitle($district->name);
        $district->save();
        return redirect('admin/quan-huyen/them')->with('message', 'Bạn đã thêm thành công');

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
        $cities = City::all();
        $district = District::find($id);
        return view('admin.district.edit', ['district' => $district, 'cities' => $cities]);
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
                'DistrictName' => 'required',
            ],
            [
                'city.required' => 'Vui lòng chọn tỉnh/thành phố',
                'DistrictName.required' => 'Tên quận/huyện không được để trống',
            ]
        );
        $district = District::find($id);
        $district->name = $request->DistrictName;
        $district->city_id = $request->city;
        $district->slug = changeTitle($district->name);
        $district->save();
        return redirect('admin/quan-huyen/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = District::find($id);
        $district->delete();
        return redirect('admin/quan-huyen/danh-sach')->with('message', 'Đã xóa thành công');
    }
}
