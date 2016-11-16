<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::paginate(10);
        return view('admin.city.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.city.create');
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
                'CityName' => 'required|unique:cities,name',
            ],
            [
                'CityName.required' => 'Tên tỉnh/thành phố không được để trống',
                'CityName.unique' => 'Tên tỉnh/thành phố đã tồn tại'
            ]
        );
        $city = new City;
        $city->name = $request->CityName;
        $city->slug = changeTitle($city->name);
        $city->save();
        return redirect('admin/tinh-thanh-pho/them')->with('message', 'Đã thêm thành công');
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
        $city = City::find($id);
        return view('admin.city.edit', ['city' => $city]);
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
                'CityName' => 'required|unique:cities,name',
            ],
            [
                'CityName.required' => 'Tên tỉnh/thành phố không được để trống',
                'CityName.unique' => 'Tên tỉnh/thành phố đã tồn tại'
            ]
        );
        $city = City::find($id);
        $city->name = $request->CityName;
        $city->slug = changeTitle($city->name);
        $city->save();
        return redirect('admin/tinh-thanh-pho/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect('admin/tinh-thanh-pho/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
