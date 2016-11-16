<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Street;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $streets = Street::paginate(10);
        return view('admin.street.index', ['streets' => $streets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('cities')->orderBy('name', 'ASC')->get();
        return view('admin.street.create', ['cities' => $cities]);
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
                'StreetName' => 'required',
            ],
            [
                'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
                'district.required' => 'Bạn chưa chọn quận/huyện',
                'StreetName.required' => 'Tên đường/phố không được để trống',
            ]
        );
        //echo $request->StreetName;
        $street = new Street;
        $street->name = $request->StreetName;
        $street->district_id = $request->district;
        $street->slug = changeTitle($street->name);
        $street->save();
       return redirect('admin/duong-pho/them')->with('message', 'Bạn đã thêm thành công');
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
        $street = Street::find($id);
        return view('admin.street.edit', ['street' => $street, 'cities' => $cities]);
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
                'StreetName' => 'required',
            ],
            [
                'city.required' => 'Bạn chưa chọn tỉnh/thành phố',
                'district.required' => 'Bạn chưa chọn quận/huyện',
                'StreetName.required' => 'Tên đường/phố không được để trống',
            ]
        );
        $street = Street::find($id);
        $street->name = $request->StreetName;
        $street->district_id = $request->district;
        $street->slug = changeTitle($street->name);
        if($street->save())
        return redirect('admin/duong-pho/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
        else
            echo 'loi';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $street = Street::find($id);
        $street->delete();
        return redirect('admin/duong-pho/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
