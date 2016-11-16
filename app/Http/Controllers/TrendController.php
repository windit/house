<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Trend;

class TrendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trends = Trend::all();
        return view('admin.trend.index', ['trends' => $trends]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trend.create');
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
                'TrendName' => 'required|min:3|max:30|unique:trends,name',
            ],
            [
                'TrendName.required' => 'Hướng nhà không được để trống',
                'TrendName.min' => 'Hướng nhà không được ít hơn 3 kí tự',
                'TrendName.max' => 'Hướng nhà không được nhiều hơn 30 kí tự',
                'TrendName.unique' => 'Hướng nhà đã tồn tại'
            ]
        );
        $trend = new Trend;
        $trend->name = $request->TrendName;
        $trend->slug = changeTitle($trend->name);
        $trend->save();
        return redirect('admin/huong-nha/them')->with('message', 'Bạn đã thêm thành công');
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
        $trend = Trend::find($id);
        return view('admin.trend.edit', ['trend' => $trend]);
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
                'TrendName' => 'required|min:3|max:30|unique:trends,name',
            ],
            [
                'TrendName.required' => 'Hướng nhà không được để trống',
                'TrendName.min' => 'Hướng nhà không được ít hơn 3 kí tự',
                'TrendName.max' => 'Hướng nhà không được nhiều hơn 30 kí tự',
                'TrendName.unique' => 'Hướng nhà đã tồn tại'
            ]
        );
        $trend = Trend::find($id);
        $trend->name = $request->TrendName;
        $trend->slug = changeTitle($trend->name);
        $trend->save();
        return redirect('admin/huong-nha/sua/'.$id)->with('message', 'Bạn đã sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trend = Trend::find($id);
        $trend->delete();
        return redirect('admin/huong-nha/danh-sach')->with('message', 'Bạn đã xóa thành công');
    }
}
